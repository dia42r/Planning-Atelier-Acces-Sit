<?php declare(strict_types=1);

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180624150511 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE calendar_event');
        $this->addSql('DROP TABLE competence_actor');
        $this->addSql('ALTER TABLE main_sous_planification CHANGE time_previs time_previs TIME DEFAULT NULL');
        $this->addSql('ALTER TABLE competence ADD actor_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE competence ADD CONSTRAINT FK_94D4687F10DAF24A FOREIGN KEY (actor_id) REFERENCES actor (id)');
        $this->addSql('CREATE INDEX IDX_94D4687F10DAF24A ON competence (actor_id)');
//        $this->addSql('CREATE UNIQUE INDEX UNIQ_5727BE815EB52FD5 ON sale_document_line (documentId)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE calendar_event (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE competence_actor (actor_id INT NOT NULL, competence_id INT NOT NULL, INDEX IDX_CE57071F10DAF24A (actor_id), INDEX IDX_CE57071F15761DAB (competence_id), PRIMARY KEY(actor_id, competence_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE competence_actor ADD CONSTRAINT FK_CE57071F10DAF24A FOREIGN KEY (actor_id) REFERENCES actor (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE competence_actor ADD CONSTRAINT FK_CE57071F15761DAB FOREIGN KEY (competence_id) REFERENCES competence (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE competence DROP FOREIGN KEY FK_94D4687F10DAF24A');
        $this->addSql('DROP INDEX IDX_94D4687F10DAF24A ON competence');
        $this->addSql('ALTER TABLE competence DROP actor_id');
        $this->addSql('ALTER TABLE main_sous_planification CHANGE time_previs time_previs TIME NOT NULL');
        $this->addSql('DROP INDEX UNIQ_5727BE815EB52FD5 ON sale_document_line');
    }
}
