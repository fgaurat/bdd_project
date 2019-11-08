<?php
    include_once('../repositories/ProjectRepository.class.php');


    $repo = new ProjectRepository();
    $projects = $repo->findAll();


    var_dump($projects);