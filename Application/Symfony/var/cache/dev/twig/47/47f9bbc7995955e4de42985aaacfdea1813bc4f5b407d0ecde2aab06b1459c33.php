<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_d8db24ad5b350e8bed8c4ab87573bba2f98b2de862b836ecfbe04ef1f8f04488 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_266de17bda69cea44e94e975570b1f66d6c09a24dbcc9f520058ee36e559f55f = $this->env->getExtension("native_profiler");
        $__internal_266de17bda69cea44e94e975570b1f66d6c09a24dbcc9f520058ee36e559f55f->enter($__internal_266de17bda69cea44e94e975570b1f66d6c09a24dbcc9f520058ee36e559f55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_266de17bda69cea44e94e975570b1f66d6c09a24dbcc9f520058ee36e559f55f->leave($__internal_266de17bda69cea44e94e975570b1f66d6c09a24dbcc9f520058ee36e559f55f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3c3fd06667aef48d65861edea2e20c28a8e4ea3399194bac992ac2056ea1ed57 = $this->env->getExtension("native_profiler");
        $__internal_3c3fd06667aef48d65861edea2e20c28a8e4ea3399194bac992ac2056ea1ed57->enter($__internal_3c3fd06667aef48d65861edea2e20c28a8e4ea3399194bac992ac2056ea1ed57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_3c3fd06667aef48d65861edea2e20c28a8e4ea3399194bac992ac2056ea1ed57->leave($__internal_3c3fd06667aef48d65861edea2e20c28a8e4ea3399194bac992ac2056ea1ed57_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
