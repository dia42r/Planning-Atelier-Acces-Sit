<?php declare(strict_types = 1);

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180502160947 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE planification_actor (planification_id INT NOT NULL, actor_id INT NOT NULL, INDEX IDX_117803B3E65142C2 (planification_id), INDEX IDX_117803B310DAF24A (actor_id), PRIMARY KEY(planification_id, actor_id)) DEFAULT CHARACTER SET UTF8 COLLATE UTF8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE planification_saledocumentline (planification_id INT NOT NULL, saledocumentline_id VARCHAR(255) NOT NULL, INDEX IDX_E7772AE9E65142C2 (planification_id), INDEX IDX_E7772AE97115DFCF (saledocumentline_id), PRIMARY KEY(planification_id, saledocumentline_id)) DEFAULT CHARACTER SET UTF8 COLLATE UTF8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE actor_competence (competence_id INT NOT NULL, actor_id INT NOT NULL, INDEX IDX_A6F87D6C15761DAB (competence_id), INDEX IDX_A6F87D6C10DAF24A (actor_id), PRIMARY KEY(competence_id, actor_id)) DEFAULT CHARACTER SET UTF8 COLLATE UTF8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE planification_actor ADD CONSTRAINT FK_117803B3E65142C2 FOREIGN KEY (planification_id) REFERENCES main_planification (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE planification_actor ADD CONSTRAINT FK_117803B310DAF24A FOREIGN KEY (actor_id) REFERENCES actor (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE planification_saledocumentline ADD CONSTRAINT FK_E7772AE9E65142C2 FOREIGN KEY (planification_id) REFERENCES main_planification (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE planification_saledocumentline ADD CONSTRAINT FK_E7772AE97115DFCF FOREIGN KEY (saledocumentline_id) REFERENCES sale_document_line (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE actor_competence ADD CONSTRAINT FK_A6F87D6C15761DAB FOREIGN KEY (competence_id) REFERENCES competence (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE actor_competence ADD CONSTRAINT FK_A6F87D6C10DAF24A FOREIGN KEY (actor_id) REFERENCES actor (id) ON DELETE CASCADE');
//        $this->addSql('CREATE UNIQUE INDEX UNIQ_5727BE815EB52FD5 ON sale_document_line (documentId)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE planification_actor');
        $this->addSql('DROP TABLE planification_saledocumentline');
        $this->addSql('DROP TABLE actor_competence');
        $this->addSql('DROP INDEX UNIQ_5727BE815EB52FD5 ON sale_document_line');
    }
}
