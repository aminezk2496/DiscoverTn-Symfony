<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230422031338 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE favorite DROP FOREIGN KEY fk_favorite_camping');
        $this->addSql('ALTER TABLE favorite DROP FOREIGN KEY fk_favorite_randonnee');
        $this->addSql('ALTER TABLE favorite ADD created_at DATETIME NOT NULL, DROP createdAt, CHANGE id_f id_f INT AUTO_INCREMENT NOT NULL, CHANGE userid user INT NOT NULL');
        $this->addSql('DROP INDEX fk_favorite_camping ON favorite');
        $this->addSql('CREATE INDEX IDX_68C58ED977075ABB ON favorite (camp_id)');
        $this->addSql('DROP INDEX fk_favorite_randonnee ON favorite');
        $this->addSql('CREATE INDEX IDX_68C58ED92E7577D9 ON favorite (rand_id)');
        $this->addSql('ALTER TABLE favorite ADD CONSTRAINT fk_favorite_camping FOREIGN KEY (camp_id) REFERENCES camping (id_Camping)');
        $this->addSql('ALTER TABLE favorite ADD CONSTRAINT fk_favorite_randonnee FOREIGN KEY (rand_id) REFERENCES randonnee (id_randonnee)');
        $this->addSql('ALTER TABLE participation DROP FOREIGN KEY fk_participation_randonnee');
        $this->addSql('ALTER TABLE participation DROP FOREIGN KEY fk_participation_camping');
        $this->addSql('ALTER TABLE participation DROP FOREIGN KEY fk_participation_randonnee');
        $this->addSql('ALTER TABLE participation DROP FOREIGN KEY fk_participation_camping');
        $this->addSql('ALTER TABLE participation CHANGE id_events id_events INT NOT NULL');
        $this->addSql('ALTER TABLE participation ADD CONSTRAINT FK_AB55E24F4AB45E32 FOREIGN KEY (id_camp) REFERENCES camping (id_Camping)');
        $this->addSql('ALTER TABLE participation ADD CONSTRAINT FK_AB55E24F93E6E976 FOREIGN KEY (id_rand) REFERENCES randonnee (id_randonnee)');
        $this->addSql('DROP INDEX fk_participation_camping ON participation');
        $this->addSql('CREATE INDEX IDX_AB55E24F4AB45E32 ON participation (id_camp)');
        $this->addSql('DROP INDEX fk_participation_randonnee ON participation');
        $this->addSql('CREATE INDEX IDX_AB55E24F93E6E976 ON participation (id_rand)');
        $this->addSql('ALTER TABLE participation ADD CONSTRAINT fk_participation_randonnee FOREIGN KEY (id_rand) REFERENCES randonnee (id_randonnee) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE participation ADD CONSTRAINT fk_participation_camping FOREIGN KEY (id_camp) REFERENCES camping (id_Camping) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE rating DROP FOREIGN KEY fk_rating_camping');
        $this->addSql('ALTER TABLE rating DROP FOREIGN KEY fk_rating_randonnee');
        $this->addSql('DROP INDEX fk_rating_camping ON rating');
        $this->addSql('CREATE INDEX IDX_D88926223CC6385 ON rating (camping_id)');
        $this->addSql('DROP INDEX fk_rating_randonnee ON rating');
        $this->addSql('CREATE INDEX IDX_D8892622C8C97C3C ON rating (randonnee_id)');
        $this->addSql('ALTER TABLE rating ADD CONSTRAINT fk_rating_camping FOREIGN KEY (camping_id) REFERENCES camping (id_Camping)');
        $this->addSql('ALTER TABLE rating ADD CONSTRAINT fk_rating_randonnee FOREIGN KEY (randonnee_id) REFERENCES randonnee (id_randonnee)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE favorite DROP FOREIGN KEY FK_68C58ED977075ABB');
        $this->addSql('ALTER TABLE favorite DROP FOREIGN KEY FK_68C58ED92E7577D9');
        $this->addSql('ALTER TABLE favorite ADD createdAt DATE NOT NULL, DROP created_at, CHANGE id_f id_f INT NOT NULL, CHANGE user userid INT NOT NULL');
        $this->addSql('DROP INDEX idx_68c58ed977075abb ON favorite');
        $this->addSql('CREATE INDEX fk_favorite_camping ON favorite (camp_id)');
        $this->addSql('DROP INDEX idx_68c58ed92e7577d9 ON favorite');
        $this->addSql('CREATE INDEX fk_favorite_randonnee ON favorite (rand_id)');
        $this->addSql('ALTER TABLE favorite ADD CONSTRAINT FK_68C58ED977075ABB FOREIGN KEY (camp_id) REFERENCES camping (id_Camping)');
        $this->addSql('ALTER TABLE favorite ADD CONSTRAINT FK_68C58ED92E7577D9 FOREIGN KEY (rand_id) REFERENCES randonnee (id_randonnee)');
        $this->addSql('ALTER TABLE participation DROP FOREIGN KEY FK_AB55E24F4AB45E32');
        $this->addSql('ALTER TABLE participation DROP FOREIGN KEY FK_AB55E24F93E6E976');
        $this->addSql('ALTER TABLE participation DROP FOREIGN KEY FK_AB55E24F4AB45E32');
        $this->addSql('ALTER TABLE participation DROP FOREIGN KEY FK_AB55E24F93E6E976');
        $this->addSql('ALTER TABLE participation CHANGE id_events id_events INT DEFAULT NULL');
        $this->addSql('ALTER TABLE participation ADD CONSTRAINT fk_participation_randonnee FOREIGN KEY (id_rand) REFERENCES randonnee (id_randonnee) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE participation ADD CONSTRAINT fk_participation_camping FOREIGN KEY (id_camp) REFERENCES camping (id_Camping) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('DROP INDEX idx_ab55e24f4ab45e32 ON participation');
        $this->addSql('CREATE INDEX fk_participation_camping ON participation (id_camp)');
        $this->addSql('DROP INDEX idx_ab55e24f93e6e976 ON participation');
        $this->addSql('CREATE INDEX fk_participation_randonnee ON participation (id_rand)');
        $this->addSql('ALTER TABLE participation ADD CONSTRAINT FK_AB55E24F4AB45E32 FOREIGN KEY (id_camp) REFERENCES camping (id_Camping)');
        $this->addSql('ALTER TABLE participation ADD CONSTRAINT FK_AB55E24F93E6E976 FOREIGN KEY (id_rand) REFERENCES randonnee (id_randonnee)');
        $this->addSql('ALTER TABLE rating DROP FOREIGN KEY FK_D88926223CC6385');
        $this->addSql('ALTER TABLE rating DROP FOREIGN KEY FK_D8892622C8C97C3C');
        $this->addSql('DROP INDEX idx_d8892622c8c97c3c ON rating');
        $this->addSql('CREATE INDEX fk_rating_randonnee ON rating (randonnee_id)');
        $this->addSql('DROP INDEX idx_d88926223cc6385 ON rating');
        $this->addSql('CREATE INDEX fk_rating_camping ON rating (camping_id)');
        $this->addSql('ALTER TABLE rating ADD CONSTRAINT FK_D88926223CC6385 FOREIGN KEY (camping_id) REFERENCES camping (id_Camping)');
        $this->addSql('ALTER TABLE rating ADD CONSTRAINT FK_D8892622C8C97C3C FOREIGN KEY (randonnee_id) REFERENCES randonnee (id_randonnee)');
    }
}
