<?php
/**
 * WelcomeView
 *
 */
class WelcomeView extends TPage
{
    function __construct()
    {
        parent::__construct();
        
        $html = new THtmlRenderer('app/resources/system_welcome_pt.html');

        // replace the main section variables
        $html->enableSection('main', array());
 
        $panel = new TPanelGroup('Bem-vindo!');
        $panel->add($html);
        
        // add the template to the page
        parent::add( TVBox::pack($panel) );
    }
}
