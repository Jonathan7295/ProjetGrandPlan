<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_02173f7221d3f5877738a1c45e32e585e9f66bd112a3aa48592a23ccf96cbd43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_672435560085f3eaf7a5821806c314856a763bd5aaafe3482c91a698393b3e50 = $this->env->getExtension("native_profiler");
        $__internal_672435560085f3eaf7a5821806c314856a763bd5aaafe3482c91a698393b3e50->enter($__internal_672435560085f3eaf7a5821806c314856a763bd5aaafe3482c91a698393b3e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_672435560085f3eaf7a5821806c314856a763bd5aaafe3482c91a698393b3e50->leave($__internal_672435560085f3eaf7a5821806c314856a763bd5aaafe3482c91a698393b3e50_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ec7663e18cb48a8599cb7ee09346a34fca89d3d9fba2e68fd70016033401e1c3 = $this->env->getExtension("native_profiler");
        $__internal_ec7663e18cb48a8599cb7ee09346a34fca89d3d9fba2e68fd70016033401e1c3->enter($__internal_ec7663e18cb48a8599cb7ee09346a34fca89d3d9fba2e68fd70016033401e1c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_ec7663e18cb48a8599cb7ee09346a34fca89d3d9fba2e68fd70016033401e1c3->leave($__internal_ec7663e18cb48a8599cb7ee09346a34fca89d3d9fba2e68fd70016033401e1c3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
