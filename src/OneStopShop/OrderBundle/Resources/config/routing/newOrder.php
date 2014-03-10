<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;


$collection = new RouteCollection();

$collection->add('newOrder', new Route('/', array(
    '_controller' => 'OneStopShopOrderBundle:NewOrder:index',
)));

/*$collection->add('grades_show', new Route('/{id}/show', array(
    '_controller' => 'AcmeDemoBundle:Grades:show',
)));

$collection->add('grades_new', new Route('/new', array(
    '_controller' => 'AcmeDemoBundle:Grades:new',
)));*/

$collection->add('newOrder_create', new Route(
    '/create',
    array('_controller' => 'OneStopShopOrderBundle:NewOrder:create'),
    array('_method' => 'post')
));

/*$collection->add('grades_edit', new Route('/{id}/edit', array(
    '_controller' => 'AcmeDemoBundle:Grades:edit',
)));

$collection->add('grades_update', new Route(
    '/{id}/update',
    array('_controller' => 'AcmeDemoBundle:Grades:update'),
    array('_method' => 'post|put')
));

$collection->add('grades_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'AcmeDemoBundle:Grades:delete'),
    array('_method' => 'post|delete')
));*/

return $collection;
