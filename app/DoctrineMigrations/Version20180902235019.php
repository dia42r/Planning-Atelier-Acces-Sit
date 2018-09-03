<?php declare(strict_types=1);

namespace Application\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180902235019 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE main_sous_planification (id INT AUTO_INCREMENT NOT NULL, planif_id INT DEFAULT NULL, competences VARCHAR(50) NOT NULL, status VARCHAR(50) NOT NULL, time_planif TIME DEFAULT NULL, starting_date DATETIME DEFAULT NULL, end_date DATETIME DEFAULT NULL, time_previs TIME DEFAULT NULL, INDEX IDX_EC7410C79DBEEA35 (planif_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET UTF8 COLLATE UTF8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sousplanification_actor (sousplanification_id INT NOT NULL, actor_id INT NOT NULL, INDEX IDX_92A6061757FBE842 (sousplanification_id), INDEX IDX_92A6061710DAF24A (actor_id), PRIMARY KEY(sousplanification_id, actor_id)) DEFAULT CHARACTER SET UTF8 COLLATE UTF8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(70) NOT NULL, password VARCHAR(255) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json_array)\', UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET UTF8 COLLATE UTF8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE actor (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(30) NOT NULL, enabled TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET UTF8 COLLATE UTF8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE competence_actor (actor_id INT NOT NULL, competence_id INT NOT NULL, INDEX IDX_CE57071F10DAF24A (actor_id), INDEX IDX_CE57071F15761DAB (competence_id), PRIMARY KEY(actor_id, competence_id)) DEFAULT CHARACTER SET UTF8 COLLATE UTF8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE main_planification (id INT AUTO_INCREMENT NOT NULL, date_planif DATETIME DEFAULT NULL, comment VARCHAR(255) DEFAULT NULL, starting_date DATETIME DEFAULT NULL, end_date DATETIME DEFAULT NULL, SaleDocumentLine_id VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_4D649D8610E9AED9 (SaleDocumentLine_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET UTF8 COLLATE UTF8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE competence (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(60) NOT NULL, position INT NOT NULL, UNIQUE INDEX UNIQ_94D4687F5E237E06 (name), UNIQUE INDEX UNIQ_94D4687F462CE4F5 (position), PRIMARY KEY(id)) DEFAULT CHARACTER SET UTF8 COLLATE UTF8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sale_document_line (id VARCHAR(255) NOT NULL, item_id VARCHAR(255) DEFAULT NULL, documentId VARCHAR(255) DEFAULT NULL, description LONGTEXT DEFAULT NULL, quantity INT NOT NULL, realQuantity INT DEFAULT NULL, deliveryDate DATETIME DEFAULT NULL, deliveryState VARCHAR(60) DEFAULT NULL, comment VARCHAR(255) DEFAULT NULL, status VARCHAR(30) DEFAULT NULL, status_bis VARCHAR(30) DEFAULT NULL, total_time TIME DEFAULT NULL, total_time_multiple INT DEFAULT NULL, total_prev TIME DEFAULT NULL, total_prev_multiple INT DEFAULT NULL, documentWishDate DATE DEFAULT NULL, saleDocument_id VARCHAR(255) DEFAULT NULL, Planification_id INT DEFAULT NULL, INDEX IDX_5727BE81126F525E (item_id), INDEX IDX_5727BE81DBBCE3DC (saleDocument_id), UNIQUE INDEX UNIQ_5727BE81F16E39BF (Planification_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET UTF8 COLLATE UTF8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sale_document (id VARCHAR(255) NOT NULL, documentdate DATETIME NOT NULL, documentnumber VARCHAR(255) NOT NULL, customerName VARCHAR(255) NOT NULL, numberPrefix VARCHAR(20) NOT NULL, total_time TIME DEFAULT NULL, catEnd TINYINT(1) NOT NULL, status VARCHAR(40) DEFAULT NULL, status_bis VARCHAR(30) DEFAULT NULL, documentWishDate DATE DEFAULT NULL, total_prev TIME DEFAULT NULL, documentEndDateFabric DATE DEFAULT NULL, starting_date DATETIME DEFAULT NULL, end_date DATETIME DEFAULT NULL, documentValidDate DATE DEFAULT NULL, customer_id INT DEFAULT NULL, UNIQUE INDEX UNIQ_C61D66DC750985BA (documentnumber), INDEX IDX_C61D66DC9395C3F3 (customer_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET UTF8 COLLATE UTF8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE item (id VARCHAR(255) NOT NULL, caption VARCHAR(255) NOT NULL, desComm LONGTEXT DEFAULT NULL, note VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET UTF8 COLLATE UTF8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE main_sous_planification ADD CONSTRAINT FK_EC7410C79DBEEA35 FOREIGN KEY (planif_id) REFERENCES main_planification (id)');
        $this->addSql('ALTER TABLE sousplanification_actor ADD CONSTRAINT FK_92A6061757FBE842 FOREIGN KEY (sousplanification_id) REFERENCES main_sous_planification (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE sousplanification_actor ADD CONSTRAINT FK_92A6061710DAF24A FOREIGN KEY (actor_id) REFERENCES actor (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE competence_actor ADD CONSTRAINT FK_CE57071F10DAF24A FOREIGN KEY (actor_id) REFERENCES actor (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE competence_actor ADD CONSTRAINT FK_CE57071F15761DAB FOREIGN KEY (competence_id) REFERENCES competence (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE main_planification ADD CONSTRAINT FK_4D649D8610E9AED9 FOREIGN KEY (SaleDocumentLine_id) REFERENCES sale_document_line (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE sale_document_line ADD CONSTRAINT FK_5727BE81126F525E FOREIGN KEY (item_id) REFERENCES item (id)');
        $this->addSql('ALTER TABLE sale_document_line ADD CONSTRAINT FK_5727BE81DBBCE3DC FOREIGN KEY (saleDocument_id) REFERENCES sale_document (id)');
        $this->addSql('ALTER TABLE sale_document_line ADD CONSTRAINT FK_5727BE81F16E39BF FOREIGN KEY (Planification_id) REFERENCES main_planification (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE sousplanification_actor DROP FOREIGN KEY FK_92A6061757FBE842');
        $this->addSql('ALTER TABLE sousplanification_actor DROP FOREIGN KEY FK_92A6061710DAF24A');
        $this->addSql('ALTER TABLE competence_actor DROP FOREIGN KEY FK_CE57071F10DAF24A');
        $this->addSql('ALTER TABLE main_sous_planification DROP FOREIGN KEY FK_EC7410C79DBEEA35');
        $this->addSql('ALTER TABLE sale_document_line DROP FOREIGN KEY FK_5727BE81F16E39BF');
        $this->addSql('ALTER TABLE competence_actor DROP FOREIGN KEY FK_CE57071F15761DAB');
        $this->addSql('ALTER TABLE main_planification DROP FOREIGN KEY FK_4D649D8610E9AED9');
        $this->addSql('ALTER TABLE sale_document_line DROP FOREIGN KEY FK_5727BE81DBBCE3DC');
        $this->addSql('ALTER TABLE sale_document_line DROP FOREIGN KEY FK_5727BE81126F525E');
        $this->addSql('DROP TABLE main_sous_planification');
        $this->addSql('DROP TABLE sousplanification_actor');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE actor');
        $this->addSql('DROP TABLE competence_actor');
        $this->addSql('DROP TABLE main_planification');
        $this->addSql('DROP TABLE competence');
        $this->addSql('DROP TABLE sale_document_line');
        $this->addSql('DROP TABLE sale_document');
        $this->addSql('DROP TABLE item');
    }
}
