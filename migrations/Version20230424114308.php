<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230424114308 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE entity (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE evenement');
        $this->addSql('DROP TABLE evenement_type');
        $this->addSql('ALTER TABLE participation MODIFY id_Parti INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON participation');
        $this->addSql('ALTER TABLE participation DROP id_Camp, DROP id_Rand, DROP Nombre, DROP Montant, DROP Etat, DROP date_Parti, DROP id_evenement, DROP id_utilisateur, CHANGE id_Parti id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE participation ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE evenement (id_event INT AUTO_INCREMENT NOT NULL, titre_event VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, date_debut_event DATETIME NOT NULL, date_fin_event DATETIME NOT NULL, prix_event VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, lieu_event VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, desc_event TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, image_event VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, PRIMARY KEY(id_event)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE evenement_type (id_evenement_type INT AUTO_INCREMENT NOT NULL, nom_evenement_type VARCHAR(30) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, PRIMARY KEY(id_evenement_type)) DEFAULT CHARACTER SET latin1 COLLATE `latin1_swedish_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('DROP TABLE entity');
        $this->addSql('DROP TABLE messenger_messages');
        $this->addSql('ALTER TABLE participation MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `PRIMARY` ON participation');
        $this->addSql('ALTER TABLE participation ADD id_Camp INT DEFAULT NULL, ADD id_Rand INT DEFAULT NULL, ADD Nombre INT NOT NULL, ADD Montant DOUBLE PRECISION NOT NULL, ADD Etat VARCHAR(10) NOT NULL, ADD date_Parti DATE DEFAULT \'CURRENT_TIMESTAMP\' NOT NULL, ADD id_evenement INT NOT NULL, ADD id_utilisateur INT DEFAULT NULL, CHANGE id id_Parti INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE participation ADD PRIMARY KEY (id_Parti)');
    }
}
