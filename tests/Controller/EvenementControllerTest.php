<?php

namespace App\Test\Controller;

use App\Entity\Evenement;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EvenementControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private EntityManagerInterface $manager;
    private EntityRepository $repository;
    private string $path = '/evenement/admin/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->manager = static::getContainer()->get('doctrine')->getManager();
        $this->repository = $this->manager->getRepository(Evenement::class);

        foreach ($this->repository->findAll() as $object) {
            $this->manager->remove($object);
        }

        $this->manager->flush();
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Evenement index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'evenement[titreEvent]' => 'Testing',
            'evenement[dateDebutEvent]' => 'Testing',
            'evenement[dateFinEvent]' => 'Testing',
            'evenement[prixEvent]' => 'Testing',
            'evenement[lieuEvent]' => 'Testing',
            'evenement[descEvent]' => 'Testing',
            'evenement[imageEvent]' => 'Testing',
            'evenement[idEvenementType]' => 'Testing',
        ]);

        self::assertResponseRedirects('/sweet/food/');

        self::assertSame(1, $this->getRepository()->count([]));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Evenement();
        $fixture->setTitreEvent('My Title');
        $fixture->setDateDebutEvent('My Title');
        $fixture->setDateFinEvent('My Title');
        $fixture->setPrixEvent('My Title');
        $fixture->setLieuEvent('My Title');
        $fixture->setDescEvent('My Title');
        $fixture->setImageEvent('My Title');
        $fixture->setIdEvenementType('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Evenement');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Evenement();
        $fixture->setTitreEvent('Value');
        $fixture->setDateDebutEvent('Value');
        $fixture->setDateFinEvent('Value');
        $fixture->setPrixEvent('Value');
        $fixture->setLieuEvent('Value');
        $fixture->setDescEvent('Value');
        $fixture->setImageEvent('Value');
        $fixture->setIdEvenementType('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'evenement[titreEvent]' => 'Something New',
            'evenement[dateDebutEvent]' => 'Something New',
            'evenement[dateFinEvent]' => 'Something New',
            'evenement[prixEvent]' => 'Something New',
            'evenement[lieuEvent]' => 'Something New',
            'evenement[descEvent]' => 'Something New',
            'evenement[imageEvent]' => 'Something New',
            'evenement[idEvenementType]' => 'Something New',
        ]);

        self::assertResponseRedirects('/evenement/admin/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getTitreEvent());
        self::assertSame('Something New', $fixture[0]->getDateDebutEvent());
        self::assertSame('Something New', $fixture[0]->getDateFinEvent());
        self::assertSame('Something New', $fixture[0]->getPrixEvent());
        self::assertSame('Something New', $fixture[0]->getLieuEvent());
        self::assertSame('Something New', $fixture[0]->getDescEvent());
        self::assertSame('Something New', $fixture[0]->getImageEvent());
        self::assertSame('Something New', $fixture[0]->getIdEvenementType());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();
        $fixture = new Evenement();
        $fixture->setTitreEvent('Value');
        $fixture->setDateDebutEvent('Value');
        $fixture->setDateFinEvent('Value');
        $fixture->setPrixEvent('Value');
        $fixture->setLieuEvent('Value');
        $fixture->setDescEvent('Value');
        $fixture->setImageEvent('Value');
        $fixture->setIdEvenementType('Value');

        $$this->manager->remove($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertResponseRedirects('/evenement/admin/');
        self::assertSame(0, $this->repository->count([]));
    }
}
