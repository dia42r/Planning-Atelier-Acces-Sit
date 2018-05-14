<?php declare(strict_types=1);

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180513133716 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE main_sous_planification (id INT AUTO_INCREMENT NOT NULL, planif_id INT DEFAULT NULL, competences VARCHAR(50) NOT NULL, time_planif TIME NOT NULL, starting_date DATETIME NOT NULL, end_date DATETIME NOT NULL, INDEX IDX_EC7410C79DBEEA35 (planif_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET UTF8 COLLATE UTF8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sousplanification_actor (sousplanification_id INT NOT NULL, actor_id INT NOT NULL, INDEX IDX_92A6061757FBE842 (sousplanification_id), INDEX IDX_92A6061710DAF24A (actor_id), PRIMARY KEY(sousplanification_id, actor_id)) DEFAULT CHARACTER SET UTF8 COLLATE UTF8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE planification_saledocumentline (planification_id INT NOT NULL, saledocumentline_id VARCHAR(255) NOT NULL, INDEX IDX_E7772AE9E65142C2 (planification_id), INDEX IDX_E7772AE97115DFCF (saledocumentline_id), PRIMARY KEY(planification_id, saledocumentline_id)) DEFAULT CHARACTER SET UTF8 COLLATE UTF8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE main_sous_planification ADD CONSTRAINT FK_EC7410C79DBEEA35 FOREIGN KEY (planif_id) REFERENCES main_planification (id)');
        $this->addSql('ALTER TABLE sousplanification_actor ADD CONSTRAINT FK_92A6061757FBE842 FOREIGN KEY (sousplanification_id) REFERENCES main_sous_planification (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE sousplanification_actor ADD CONSTRAINT FK_92A6061710DAF24A FOREIGN KEY (actor_id) REFERENCES actor (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE planification_saledocumentline ADD CONSTRAINT FK_E7772AE9E65142C2 FOREIGN KEY (planification_id) REFERENCES main_planification (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE planification_saledocumentline ADD CONSTRAINT FK_E7772AE97115DFCF FOREIGN KEY (saledocumentline_id) REFERENCES sale_document_line (id) ON DELETE CASCADE');
//        $this->addSql('CREATE UNIQUE INDEX UNIQ_5727BE815EB52FD5 ON sale_document_line (documentId)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE sousplanification_actor DROP FOREIGN KEY FK_92A6061757FBE842');
        $this->addSql('DROP TABLE main_sous_planification');
        $this->addSql('DROP TABLE sousplanification_actor');
        $this->addSql('DROP TABLE planification_saledocumentline');
        $this->addSql('DROP INDEX UNIQ_5727BE815EB52FD5 ON sale_document_line');
    }
}
