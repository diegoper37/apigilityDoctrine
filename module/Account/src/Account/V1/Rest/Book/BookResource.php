<?php
namespace Account\V1\Rest\Book;

use ZF\ApiProblem\ApiProblem;
use ZF\Rest\AbstractResourceListener;
use Doctrine\Common\Persistence\ObjectManager;

class BookResource extends AbstractResourceListener
{

    /**
     * Set the object manager
     *
     * @param ObjectManager|EntityManagerInterface $objectManager
     */
    public function setObjectManager(ObjectManager $objectManager)
    {
        $this->objectManager = $objectManager;
    }

    /**
     * Get the object manager
     *
     * @return ObjectManager|EntityManagerInterface
     */
    public function getObjectManager()
    {
        return $this->objectManager;
    }

    /**
     * Create a resource
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function create($data)
    {
        $entity = new \Account\Entity\Book();
        $entity->setName($data->name);
        $entity->setResume($data->resume);
        $this->getObjectManager()->persist($entity);
        $this->getObjectManager()->flush();
        return ['id' => $entity->getId(),'name' => $entity->getName(),'resume' => $entity->getResume()];
    }

    /**
     * Delete a resource
     *
     * @param  mixed $id
     * @return ApiProblem|mixed
     */
    public function delete($id)
    {
        $repo = $this->getObjectManager()->getRepository('Account\Entity\Book');
        $entity = $repo->find($id);
        $this->getObjectManager()->remove($entity);
        $this->getObjectManager()->flush();
        return true;
    }

    /**
     * Delete a collection, or members of a collection
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function deleteList($data)
    {
        return new ApiProblem(405, 'The DELETE method has not been defined for collections');
    }

    /**
     * Fetch a resource
     *
     * @param  mixed $id
     * @return ApiProblem|mixed
     */
    public function fetch($id)
    {
        $repo = $this->getObjectManager()->getRepository('Account\Entity\Book');
        $entity = $repo->findOneById($id);
        return ['id' => $entity->getId(),'name' => $entity->getName(),'resume' => $entity->getResume()];
    }

    /**
     * Fetch all or a subset of resources
     *
     * @param  array $params
     * @return ApiProblem|mixed
     */
    public function fetchAll($params = array())
    {
        $repo = $this->getObjectManager()->getRepository('Account\Entity\Book');
        $entities = $repo->findAll();
        foreach ($entities as $entity) {
            $collection[] = ['id' => $entity->getId(),'name' => $entity->getName(),'resume' => $entity->getResume()];
        }
        return $collection;
    }

    /**
     * Patch (partial in-place update) a resource
     *
     * @param  mixed $id
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function patch($id, $data)
    {
        $repo = $this->getObjectManager()->getRepository('Account\Entity\Book');
        $entity = $repo->findOneById($id);
        $alter = false;
        if(isset($data->name)){
            $entity->setName($data->name);
            $alter = true;
        }
        if(isset($data->resume)){
            $entity->setResume($data->resume);
            $alter = true;
        }
        if($alter !== false){
            $this->getObjectManager()->persist($entity);
            $this->getObjectManager()->flush();
            return ['id' => $entity->getId(),'name' => $entity->getName(),'resume' => $entity->getResume()];
        }

        return new ApiProblem(412, 'Nenhuma alteração foi efetuada');
    }

    /**
     * Replace a collection or members of a collection
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function replaceList($data)
    {
        return new ApiProblem(405, 'The PUT method has not been defined for collections');
    }

    /**
     * Update a resource
     *
     * @param  mixed $id
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function update($id, $data)
    {
        $repo = $this->getObjectManager()->getRepository('Account\Entity\Book');
        $entity = $repo->findOneById($id);
        $entity->setName($data->name);
        $entity->setResume($data->resume);
        $this->getObjectManager()->persist($entity);
        $this->getObjectManager()->flush();
        return ['id' => $entity->getId(),'name' => $entity->getName(),'resume' => $entity->getResume()];
    }
}
