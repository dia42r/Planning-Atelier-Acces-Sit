<?php declare(strict_types = 1);

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180305202729 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE actor_competence (id INT AUTO_INCREMENT NOT NULL, actor_id INT DEFAULT NULL, competence_id INT DEFAULT NULL, date DATETIME NOT NULL, INDEX IDX_A6F87D6C10DAF24A (actor_id), INDEX IDX_A6F87D6C15761DAB (competence_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE actor_competence ADD CONSTRAINT FK_A6F87D6C10DAF24A FOREIGN KEY (actor_id) REFERENCES actor (id)');
        $this->addSql('ALTER TABLE actor_competence ADD CONSTRAINT FK_A6F87D6C15761DAB FOREIGN KEY (competence_id) REFERENCES competence (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_5727BE815EB52FD5 ON sale_document_line (documentId)');
        $this->addSql('ALTER TABLE sale_document CHANGE customerName customerName VARCHAR(255) NOT NULL, CHANGE numberPrefix numberPrefix VARCHAR(20) NOT NULL');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE actor_competence');
        $this->addSql('ALTER TABLE sale_document CHANGE customerName customerName VARCHAR(50) DEFAULT NULL COLLATE utf8_unicode_ci, CHANGE numberPrefix numberPrefix VARCHAR(20) DEFAULT NULL COLLATE utf8_unicode_ci');
        $this->addSql('DROP INDEX UNIQ_5727BE815EB52FD5 ON sale_document_line');
    }
}
