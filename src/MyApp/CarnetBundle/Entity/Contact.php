<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Contact
 *
 * @author youssef
 */
namespace MyApp\CarnetBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 */
class Contact {
    /**
   * @ORM\GeneratedValue
   * @ORM\Id
   * @ORM\Column(type="integer")
   */ 
     private $id;
  /**
   * @ORM\Column(type="string",length=30)
   */
  private $nom;
   /**
   * @ORM\Column(type="string",length=30)
   */
  private $prenom;
   /**
   * @ORM\Column(type="string",length=30)
   */
  private $email;
   /**
   * @ORM\Column(type="string",length=30)
   */
  private $adresse;
   /**
   * @ORM\Column(type="string",length=30)
   */
  private $telephone;
   /**
   * @ORM\Column(type="string",length=30)
   */
  private $siteweb;
  function getId() {
      return $this->id;
  }

  function getNom() {
      return $this->nom;
  }

  function getPrenom() {
      return $this->prenom;
  }

  function getEmail() {
      return $this->email;
  }

  function getAdresse() {
      return $this->adresse;
  }

  function getTelephone() {
      return $this->telephone;
  }

  function getSiteweb() {
      return $this->siteweb;
  }

  function setId($id) {
      $this->id = $id;
  }

  function setNom($nom) {
      $this->nom = $nom;
  }

  function setPrenom($prenom) {
      $this->prenom = $prenom;
  }

  function setEmail($email) {
      $this->email = $email;
  }

  function setAdresse($adresse) {
      $this->adresse = $adresse;
  }

  function setTelephone($telephone) {
      $this->telephone = $telephone;
  }

  function setSiteweb($siteweb) {
      $this->siteweb = $siteweb;
  }


}
