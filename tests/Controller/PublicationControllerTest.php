<?php

namespace App\Test\Controller;

use App\Entity\Publication;
use App\Repository\PublicationRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PublicationControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private PublicationRepository $repository;
    private string $path = '/publication/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(Publication::class);

        foreach ($this->repository->findAll() as $object) {
            $this->repository->remove($object, true);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Publication index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $originalNumObjectsInRepository = count($this->repository->findAll());

        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'publication[contenu]' => 'Testing',
            'publication[iduser]' => 'Testing',
            'publication[urlimage]' => 'Testing',
            'publication[datePublication]' => 'Testing',
        ]);

        self::assertResponseRedirects('/publication/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Publication();
        $fixture->setContenu('My Title');
        $fixture->setIduser('My Title');
        $fixture->setUrlimage('My Title');
        $fixture->setDatePublication('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Publication');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Publication();
        $fixture->setContenu('My Title');
        $fixture->setIduser('My Title');
        $fixture->setUrlimage('My Title');
        $fixture->setDatePublication('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'publication[contenu]' => 'Something New',
            'publication[iduser]' => 'Something New',
            'publication[urlimage]' => 'Something New',
            'publication[datePublication]' => 'Something New',
        ]);

        self::assertResponseRedirects('/publication/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getContenu());
        self::assertSame('Something New', $fixture[0]->getIduser());
        self::assertSame('Something New', $fixture[0]->getUrlimage());
        self::assertSame('Something New', $fixture[0]->getDatePublication());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new Publication();
        $fixture->setContenu('My Title');
        $fixture->setIduser('My Title');
        $fixture->setUrlimage('My Title');
        $fixture->setDatePublication('My Title');

        $this->repository->save($fixture, true);

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/publication/');
    }
}
