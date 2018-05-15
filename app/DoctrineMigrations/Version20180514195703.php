<?php declare(strict_types=1);

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180514195703 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE main_sous_planification CHANGE planif_id planif_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE actor_competence DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE actor_competence ADD PRIMARY KEY (actor_id, competence_id)');
        $this->addSql('ALTER TABLE main_planification ADD SaleDocumentLine_id VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE main_planification ADD CONSTRAINT FK_4D649D8610E9AED9 FOREIGN KEY (SaleDocumentLine_id) REFERENCES sale_document_line (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_4D649D8610E9AED9 ON main_planification (SaleDocumentLine_id)');
        $this->addSql('ALTER TABLE sale_document_line ADD Planification_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE sale_document_line ADD CONSTRAINT FK_5727BE81F16E39BF FOREIGN KEY (Planification_id) REFERENCES main_planification (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_5727BE81F16E39BF ON sale_document_line (Planification_id)');
//        $this->addSql('CREATE UNIQUE INDEX UNIQ_5727BE815EB52FD5 ON sale_document_line (documentId)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE actor_competence DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE actor_competence ADD PRIMARY KEY (competence_id, actor_id)');
        $this->addSql('ALTER TABLE main_planification DROP FOREIGN KEY FK_4D649D8610E9AED9');
        $this->addSql('DROP INDEX UNIQ_4D649D8610E9AED9 ON main_planification');
        $this->addSql('ALTER TABLE main_planification DROP SaleDocumentLine_id');
        $this->addSql('ALTER TABLE main_sous_planification CHANGE planif_id planif_id INT NOT NULL');
        $this->addSql('ALTER TABLE sale_document_line DROP FOREIGN KEY FK_5727BE81F16E39BF');
        $this->addSql('DROP INDEX UNIQ_5727BE81F16E39BF ON sale_document_line');
        $this->addSql('DROP INDEX UNIQ_5727BE815EB52FD5 ON sale_document_line');
        $this->addSql('ALTER TABLE sale_document_line DROP Planification_id');
    }
}
