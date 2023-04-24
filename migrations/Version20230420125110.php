<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230420125110 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE participation ADD id_camp INT NOT NULL, ADD id_rand INT NOT NULL');
        $this->addSql('ALTER TABLE participation ADD CONSTRAINT fk_participation_camping FOREIGN KEY (id_camp) REFERENCES camping (id_Camping)');
        $this->addSql('ALTER TABLE participation ADD CONSTRAINT fk_participation_randonnee FOREIGN KEY (id_rand) REFERENCES randonnee (id_randonnee)');
        $this->addSql('CREATE INDEX fk_participation_camping ON participation (id_camp)');
        $this->addSql('CREATE INDEX fk_participation_randonnee ON participation (id_rand)');
        $this->addSql('ALTER TABLE rating ADD camping_id INT DEFAULT NULL, ADD randonnee_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE rating ADD CONSTRAINT fk_rating_randonnee FOREIGN KEY (randonnee_id) REFERENCES randonnee (id_randonnee)');
        $this->addSql('ALTER TABLE rating ADD CONSTRAINT fk_rating_camping FOREIGN KEY (camping_id) REFERENCES camping (id_Camping)');
        $this->addSql('CREATE INDEX fk_rating_randonnee ON rating (randonnee_id)');
        $this->addSql('CREATE INDEX fk_rating_camping ON rating (camping_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE participation ADD id_camp INT NOT NULL, ADD id_rand INT NOT NULL');
        $this->addSql('ALTER TABLE participation ADD CONSTRAINT fk_participation_camping FOREIGN KEY (id_camp) REFERENCES camping (id_Camping)');
        $this->addSql('ALTER TABLE participation ADD CONSTRAINT fk_participation_randonnee FOREIGN KEY (id_rand) REFERENCES randonnee (id_randonnee)');
        $this->addSql('CREATE INDEX fk_participation_camping ON participation (id_camp)');
        $this->addSql('CREATE INDEX fk_participation_randonnee ON participation (id_rand)');
        $this->addSql('ALTER TABLE rating ADD camping_id INT DEFAULT NULL, ADD randonnee_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE rating ADD CONSTRAINT fk_rating_randonnee FOREIGN KEY (randonnee_id) REFERENCES randonnee (id_randonnee)');
        $this->addSql('ALTER TABLE rating ADD CONSTRAINT fk_rating_camping FOREIGN KEY (camping_id) REFERENCES camping (id_Camping)');
        $this->addSql('CREATE INDEX fk_rating_randonnee ON rating (randonnee_id)');
        $this->addSql('CREATE INDEX fk_rating_camping ON rating (camping_id)');
    }
}
