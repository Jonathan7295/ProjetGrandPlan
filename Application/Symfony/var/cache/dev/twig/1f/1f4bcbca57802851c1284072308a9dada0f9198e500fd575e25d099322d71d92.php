<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_1fc98f877075eb1fc778a8268c58eb52f4a5a859d21ce30d08fb1b63e60ce4ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_9428827de87b17f16aaae4948444b1496dfe02771477d940eb4ad5cd9283dee0 = $this->env->getExtension("native_profiler");
        $__internal_9428827de87b17f16aaae4948444b1496dfe02771477d940eb4ad5cd9283dee0->enter($__internal_9428827de87b17f16aaae4948444b1496dfe02771477d940eb4ad5cd9283dee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9428827de87b17f16aaae4948444b1496dfe02771477d940eb4ad5cd9283dee0->leave($__internal_9428827de87b17f16aaae4948444b1496dfe02771477d940eb4ad5cd9283dee0_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_14a77d9ac6e6d93e94fde8fcee876002b93d2a8f1fe27a371acaa69bb5b31b7d = $this->env->getExtension("native_profiler");
        $__internal_14a77d9ac6e6d93e94fde8fcee876002b93d2a8f1fe27a371acaa69bb5b31b7d->enter($__internal_14a77d9ac6e6d93e94fde8fcee876002b93d2a8f1fe27a371acaa69bb5b31b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_14a77d9ac6e6d93e94fde8fcee876002b93d2a8f1fe27a371acaa69bb5b31b7d->leave($__internal_14a77d9ac6e6d93e94fde8fcee876002b93d2a8f1fe27a371acaa69bb5b31b7d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
