<?php

namespace App\Repository;

use App\Entity\Training;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class TrainingRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Training::class);
    }

    public function saveTraining($name, $description, $user)
    {
        try {
            $training = new Training();
            $training
                ->setTrainingName($name)
                ->setDescription($description)
                ->setCreationDate(\DateTime::createFromFormat(
                    \DateTimeInterface::W3C,
                    date(\DateTimeInterface::W3C)
                ))
                ->setLastUpdateDate(\DateTime::createFromFormat(
                    \DateTimeInterface::W3C,
                    date(\DateTimeInterface::W3C)
                ))
                ->setUserId($user)
                ->setDeleted(false)
            ;

            $this->getEntityManager()->persist($training);
            $this->getEntityManager()->flush();

            return "Training succesfully saved";
        } catch (\Exception $e) {
            return "ERROR \n $e";
        }
    }
}
