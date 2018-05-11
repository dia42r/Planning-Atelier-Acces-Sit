<?php

namespace PlanningBundle\Repository;

/**
 * SaleDocumentLineRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SaleDocumentLineRepository extends \Doctrine\ORM\EntityRepository
{

    public function findDoc($id)
    {
        // Création d'une requete personnalisé Query Builder
        $q = $this->createQueryBuilder("s") // Création d'un alias
        ->select('s') // Selection des alias dont on a besoin
        ->join("s.item","i") // Jointure avec la table Item pour pouvoir utilisé les données
        ->join("s.saledocument","b")
            ->where("b.id = :docid") // En pointant vers la bonne donnée
            ->setParameter('docid',$id)
            ->getQuery();

        return $q->getResult();
    }

    public function findItem($id)
    {
        // Création d'une requete personnalisé Query Builder
        $q = $this->createQueryBuilder("s") // Création d'un alias
        ->select('s') // Selection des alias dont on a besoin
        ->join("s.item","i") // Jointure avec la table Item pour pouvoir utilisé les données
        ->join("s.saledocument","b")
            ->where("s.id = :doclineid") // En pointant vers la bonne donnée
//            ->andWhere("i.id = :itemid")
            ->setParameter('doclineid',$id)
//            ->setParameter('itemid',$item)
//            ->setParameter('docnum', $documentnumber)
            ->getQuery();

        return $q->getResult();
    }
}
