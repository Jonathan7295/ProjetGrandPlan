<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_b3385697b004fa4565cd23965af378a47e2f0fdf1e40fc826d628e41b04e5ea2 extends Twig_Template
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
        $__internal_0aef7e205c1a28f2f4df5c74c2932b9b4ec9d09fee4e6e4cf8571a9f90d7916b = $this->env->getExtension("native_profiler");
        $__internal_0aef7e205c1a28f2f4df5c74c2932b9b4ec9d09fee4e6e4cf8571a9f90d7916b->enter($__internal_0aef7e205c1a28f2f4df5c74c2932b9b4ec9d09fee4e6e4cf8571a9f90d7916b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0aef7e205c1a28f2f4df5c74c2932b9b4ec9d09fee4e6e4cf8571a9f90d7916b->leave($__internal_0aef7e205c1a28f2f4df5c74c2932b9b4ec9d09fee4e6e4cf8571a9f90d7916b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_07a22a67246f481d0b15d6aefea15ff8616c180c3a550d0de1e2512da4d21bae = $this->env->getExtension("native_profiler");
        $__internal_07a22a67246f481d0b15d6aefea15ff8616c180c3a550d0de1e2512da4d21bae->enter($__internal_07a22a67246f481d0b15d6aefea15ff8616c180c3a550d0de1e2512da4d21bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_07a22a67246f481d0b15d6aefea15ff8616c180c3a550d0de1e2512da4d21bae->leave($__internal_07a22a67246f481d0b15d6aefea15ff8616c180c3a550d0de1e2512da4d21bae_prof);

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
