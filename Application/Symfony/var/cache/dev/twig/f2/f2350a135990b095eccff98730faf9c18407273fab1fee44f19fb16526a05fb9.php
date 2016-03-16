<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_b9f4a34966368503c5e49bfd03fd62cb8277924725a4be2685237eff9af23285 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71502596cb8b9e67b331895f76836bc4e8279f571257b53199064b2c6a735608 = $this->env->getExtension("native_profiler");
        $__internal_71502596cb8b9e67b331895f76836bc4e8279f571257b53199064b2c6a735608->enter($__internal_71502596cb8b9e67b331895f76836bc4e8279f571257b53199064b2c6a735608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71502596cb8b9e67b331895f76836bc4e8279f571257b53199064b2c6a735608->leave($__internal_71502596cb8b9e67b331895f76836bc4e8279f571257b53199064b2c6a735608_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_06050aef685eff7603c3687c9a117c413737539639af0dc361105a537a46a674 = $this->env->getExtension("native_profiler");
        $__internal_06050aef685eff7603c3687c9a117c413737539639af0dc361105a537a46a674->enter($__internal_06050aef685eff7603c3687c9a117c413737539639af0dc361105a537a46a674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_06050aef685eff7603c3687c9a117c413737539639af0dc361105a537a46a674->leave($__internal_06050aef685eff7603c3687c9a117c413737539639af0dc361105a537a46a674_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
