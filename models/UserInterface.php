<?php

namespace bubasuma\simplechat\models;

interface UserInterface
{
    public function getId();
    public function getProfile();
    public function getAvatar();
    public function getName();
    public function setCreatedAt($value);
}