<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221130092410 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE groupes ADD users_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE groupes ADD CONSTRAINT FK_576366D967B3B43D FOREIGN KEY (users_id) REFERENCES users (id)');
        $this->addSql('CREATE INDEX IDX_576366D967B3B43D ON groupes (users_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE groupes DROP FOREIGN KEY FK_576366D967B3B43D');
        $this->addSql('DROP INDEX IDX_576366D967B3B43D ON groupes');
        $this->addSql('ALTER TABLE groupes DROP users_id');
    }
}
