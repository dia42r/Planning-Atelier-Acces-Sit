<?php

namespace PlanningBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * SaleDocumentRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SaleDocumentRepository extends EntityRepository
{
    public function findSaleSearch($val)
    {
        dump($val);
        // Création d'une requete personnalisé Query Builder
        $q = $this->createQueryBuilder("s") // Création d'un alias
        ->orderBy('s.documentNumber','DESC')
        ->andwhere("s.documentNumber LIKE :salval") // En pointant vers la bonne donnée
            ->setParameter('salval', '%'.$val.'%')
            ->getQuery();

        dump($q);
//        die;
        return $q->getResult();
    }
    public function findlastid()
    {
        $d = $this->createQueryBuilder('s')
            ->select('s.id')
            ->orderBy('s.id', 'DESC')
            ->setFirstResult(1)
            ->setMaxResults(1)
            ->getQuery();
        return $d->getSingleResult();
    }

    public function findSaleDoc($id)
    {
        // Création d'une requete personnalisé Query Builder
        $q = $this->createQueryBuilder("s") // Création d'un alias
        ->addSelect("b") // Selection des alias dont on a besoin
        ->join("s.saleDocumentLines","b")
            ->join("b.item","i") // Jointure avec la table Item pour pouvoir utilisé les données

            ->where("s.id = :docid") // En pointant vers la bonne donnée
            ->setParameter('docid',$id)
            ->getQuery();

        return $q->getResult()[0];
    }

    public function findSaleDocCount($id)
    {
        $q = $this->createQueryBuilder("s")
            ->Select("count(b) as max")
            ->join("s.saleDocumentLines","b")
            ->join("b.item","i")
            ->where("s.id = :docid")
            ->setParameter('docid',$id)
            ->getQuery();

        return $q->getResult()[0]['max'];
    }


    public function findSaleDocCount2($id)
    {
        // Création d'une requete personnalisé Query Builder
        $q = $this->createQueryBuilder("s") // Création d'un alias
        ->Select("count(b) as max") // Selection des alias dont on a besoin
        ->join("s.saleDocumentLines","b")
            ->join("b.item","i") // Jointure avec la table Item pour pouvoir utilisé les données

            ->where("s.id = :docid") // En pointant vers la bonne donnée
            ->andWhere("b.status = 'Planifié'") // En pointant vers la bonne donnée
            ->setParameter('docid',$id)
            ->getQuery();

        return $q->getResult()[0]['max'];
    }
    public function findSaleDocCPlanif()
    {
        // Création d'une requete personnalisé Query Builder
        $q = $this->createQueryBuilder("s") // Création d'un alias
        ->where("s.status = 'Planifié'") // En pointant vers la bonne donnée
        ->getQuery();

        return $q->getResult();
    }
}
