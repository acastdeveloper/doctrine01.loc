<?php

namespace AppBundle\Repository;

/**
 * CursoRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CursoRepository extends \Doctrine\ORM\EntityRepository
{
	public function getCursos() {
		$em = $this->getEntityManager();
		//$em =$this->getDoctrine()->getEntityManager();
		//A versions anteriors de Simfony calia posar getEntityManager();
		//Ara també. Encara no funciona amb getManager, es veu.
		//
		//OBSERVACIONS:
		//1) Dins del repositori ja no cal cridar a DOCTRINE perquè ja som dins de Doctrine.
		//2) No cal tampoc escollir el repositori amb el que treballarem perquè ja i som just 
		// a dins del repositori.
		
		$query = $this->createQueryBuilder("c")
		/* En comptes de posar $cursos_repo posem $this */
              ->where("c.precio > :precio")
              ->setParameter("precio","79")
              ->getQuery();
      	$cursos = $query->getResult();
      	return $cursos;		

	}

}
