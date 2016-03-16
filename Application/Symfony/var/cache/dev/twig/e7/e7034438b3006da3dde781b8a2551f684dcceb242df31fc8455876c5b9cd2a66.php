<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_fb88c8316be27346c9e81d37ed5f1b3c4f0ed407cf7b7db6f8bda9c854c9cbec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_de4ddaa2785a4b869be7ca8766c93c3ab82519b6a5d9bfad836f4564ca38137f = $this->env->getExtension("native_profiler");
        $__internal_de4ddaa2785a4b869be7ca8766c93c3ab82519b6a5d9bfad836f4564ca38137f->enter($__internal_de4ddaa2785a4b869be7ca8766c93c3ab82519b6a5d9bfad836f4564ca38137f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de4ddaa2785a4b869be7ca8766c93c3ab82519b6a5d9bfad836f4564ca38137f->leave($__internal_de4ddaa2785a4b869be7ca8766c93c3ab82519b6a5d9bfad836f4564ca38137f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6f64ea1bbdc533db976c1ec5b6cf3e996b511762193089b7643eb5aeb2f5ed39 = $this->env->getExtension("native_profiler");
        $__internal_6f64ea1bbdc533db976c1ec5b6cf3e996b511762193089b7643eb5aeb2f5ed39->enter($__internal_6f64ea1bbdc533db976c1ec5b6cf3e996b511762193089b7643eb5aeb2f5ed39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_6f64ea1bbdc533db976c1ec5b6cf3e996b511762193089b7643eb5aeb2f5ed39->leave($__internal_6f64ea1bbdc533db976c1ec5b6cf3e996b511762193089b7643eb5aeb2f5ed39_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
