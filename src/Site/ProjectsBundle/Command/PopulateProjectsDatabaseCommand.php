<?php

namespace Ign\Bundle\GPUBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * 
 * Commande de vérification de la présence de ogr2ogr (package gdal-bin)
 * 
 * Usage : app/console ign_gpu:geotools_exist
 * 
 * @author ahorde
 *
 */
class PopulateProjectsDatabaseCommand extends ContainerAwareCommand {

    protected function configure() {
        $this
                ->setName('custom:populateProjectsDatabase')
                ->setDescription('Rempli la table des projets de la base de donnée')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output) {
        $this->populateProjectsDatabase($input, $output);
    }

    /**
     * Test l'existence de ogr2ogr
     * 
     * @param InputInterface $input
     * @param OutputInterface $output
     */
    protected function populateProjectsDatabase(InputInterface $input, OutputInterface $output) {

        // 1) lecture du fichier parameter.yml et récuprération de la var app.projects.rootsOfProjects
        // 2) On vide la table de la bdd
        // 2) Pour chaque route présente dans cette variable
        //   2) a) On créé une nouvelle entitée Project 
        //      on ajoute à cette entité la route de l'itération
        //      b) si une entitée existe déjà on ne l'ajoute pas à la table de la bdd
        //         sinon
        //          c) on demande à l'utilisateur le nom du projet et on l'ajoute à l'entitée
        //      d) on demande à l'utilisateur la description du projet et on l'ajoute à l'entitée
        //      e) on ajoute l'entitée
        //      


        $output->writeln("<info></info>");
        $command = "ogr2ogr --version";
        $result = exec($command);

        if (preg_match('/GDAL/', $result) > 0) {
            $output_print = 'Les binaires GDAL sont bel et bien installés.';
        } else {
            $output_print = 'Attention : Les binaires GDAL ne sont pas installés.';
        }
        $output->writeln($output_print);
    }

    protected function updateProjectsDatabase(InputInterface $input, OutputInterface $output) {
        // 1) lecture du fichier parameter.yml et récuprération de la var app.projects.rootsOfProjects
        // 2) Pour chaque route présente dans cette variable
        //   2) a) On créé une nouvelle entitée Project 
        //      on ajoute à cette entité la route de l'itération
        //      b) si une entitée existe déjà on ne l'ajoute pas à la table de la bdd
        //         sinon
        //          c) on demande à l'utilisateur le nom du projet et on l'ajoute à l'entitée
        //          d) on demande à l'utilisateur la description du projet et on l'ajoute à l'entitée
        //          e) on persiste l'entitée à la table de la bdd
        //      
    }

    protected function deleteProjectFromDatabase(InputInterface $input, OutputInterface $output, $routeName) {
        //    1)on demande à l'utilisateur la route du projet et on l'ajoute à l'entitée (si routeName est indefini)
        //    1) On créé une nouvelle entitée Project avec la routeName
        //    2) si elle existe déjà dans la table de la bdd
        //      a) on la supprime de la table de la bdd 
        //      b) on prévient l'user que c'est fait 
        //    sinon
        //      a)on prévient l'user quelle n'existait déjà pas
    }

    protected function deleteProjectsFromDatabase(InputInterface $input, OutputInterface $output) {
        // on vide toute la table
    }

    protected function addProjectToDatabase(InputInterface $input, OutputInterface $output, $routeName) {
        // 
        // --force : on ecrase l'objet
        // sinon on ne le remplace pas
        // a)
        // b) on demande à l'utilisateur la route du projet et on l'ajoute à l'entitée (si routeName est indefini)
        // c) on demande à l'utilisateur le nom du projet et on l'ajoute à l'entitée
        //          d) on demande à l'utilisateur la description du projet et on l'ajoute à l'entitée
    }

}
