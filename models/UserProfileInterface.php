<?php

namespace bubasuma\simplechat\models;

interface UserProfileInterface
{
    public function getId();
    public function getFirstName();
    public function getLastName();
    public function getAvatar();
}