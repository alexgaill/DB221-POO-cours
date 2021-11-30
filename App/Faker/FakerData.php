<?php
namespace App\Faker;

use Faker\Factory;

class FakerData {
    
    /**
     * Undocumented variable
     *
     * @var Object
     */
    private $faker;

    /**
     * Constructeur de fausses données
     */
    public function __construct()
    {
        $this->faker = Factory::create("fr-FR");
    }

    /**
     * Crée un fake user
     *
     * @return array
     */
    public function fakeUser():array
    {
        return [
            "nom" => $this->faker->lastName(),
            "prenom" => $this->faker->firstName(),
            "email" => $this->faker->email(),
            "telephone" => $this->faker->phoneNumber(),
            "adresse" => $this->faker->streetAddress(),
            "cp" => $this->faker->postCode(),
            "ville" => $this->faker->city()
        ];
    }

    /**
     * Crée une fausse carte de paiement
     *
     * @return array
     */
    public function fakePaiement():array
    {
        return [
            "cardNumber" => $this->faker->creditCardNumber('Visa'),
            "exp" => $this->faker->creditCardExpirationDateString(),
            "crypto" => $this->faker->randomNumber(3, true)
        ];
    }

    /**
     * Crée un faux article
     *
     * @return array
     */
    public function fakeArticle():array
    {
        return [
            "titre" => $this->faker->sentence(),
            "contenu" => $this->faker->paragraphs(4, true),
            "date_creation" => $this->faker->dateTime(),
            "categorie" => $this->faker->word(),
            "auteur" => $this->faker->name(),
        ];
    }
}