<?php declare(strict_types = 1);

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180311184955 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE main_planification ADD actor_id INT DEFAULT NULL, ADD sale_document_line_id VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE main_planification ADD CONSTRAINT FK_4D649D8610DAF24A FOREIGN KEY (actor_id) REFERENCES actor (id)');
        $this->addSql('ALTER TABLE main_planification ADD CONSTRAINT FK_4D649D8659FA828D FOREIGN KEY (sale_document_line_id) REFERENCES sale_document_line (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_4D649D8610DAF24A ON main_planification (actor_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_4D649D8659FA828D ON main_planification (sale_document_line_id)');
        $this->addSql('ALTER TABLE actor_competence CHANGE date date DATETIME NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_5727BE815EB52FD5 ON sale_document_line (documentId)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE actor_competence CHANGE date date DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE main_planification DROP FOREIGN KEY FK_4D649D8610DAF24A');
        $this->addSql('ALTER TABLE main_planification DROP FOREIGN KEY FK_4D649D8659FA828D');
        $this->addSql('DROP INDEX UNIQ_4D649D8610DAF24A ON main_planification');
        $this->addSql('DROP INDEX UNIQ_4D649D8659FA828D ON main_planification');
        $this->addSql('ALTER TABLE main_planification DROP actor_id, DROP sale_document_line_id');
        $this->addSql('DROP INDEX UNIQ_5727BE815EB52FD5 ON sale_document_line');
    }
}
