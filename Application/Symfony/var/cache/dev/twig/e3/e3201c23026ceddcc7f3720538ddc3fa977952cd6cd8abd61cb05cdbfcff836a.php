<?php

/* :email:password_resetting.email.twig */
class __TwigTemplate_1755c3fb853b5e2e80298f3f0b04a9883b0dd3acdd8b034af9e04427e1a3f358 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4f7b4a139cb915d453b33913f8d5caf7d15de29a2038448f0a0aabcb04cb061 = $this->env->getExtension("native_profiler");
        $__internal_a4f7b4a139cb915d453b33913f8d5caf7d15de29a2038448f0a0aabcb04cb061->enter($__internal_a4f7b4a139cb915d453b33913f8d5caf7d15de29a2038448f0a0aabcb04cb061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":email:password_resetting.email.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('subject', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body_text', $context, $blocks);
        // line 15
        echo "
";
        // line 16
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a4f7b4a139cb915d453b33913f8d5caf7d15de29a2038448f0a0aabcb04cb061->leave($__internal_a4f7b4a139cb915d453b33913f8d5caf7d15de29a2038448f0a0aabcb04cb061_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ba0116972ef9ec6c69903c6ea809e9c0ad163b71e9b4d1933cd490e3fbcaa7fa = $this->env->getExtension("native_profiler");
        $__internal_ba0116972ef9ec6c69903c6ea809e9c0ad163b71e9b4d1933cd490e3fbcaa7fa->enter($__internal_ba0116972ef9ec6c69903c6ea809e9c0ad163b71e9b4d1933cd490e3fbcaa7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        echo "Resetting your password";
        
        $__internal_ba0116972ef9ec6c69903c6ea809e9c0ad163b71e9b4d1933cd490e3fbcaa7fa->leave($__internal_ba0116972ef9ec6c69903c6ea809e9c0ad163b71e9b4d1933cd490e3fbcaa7fa_prof);

    }

    // line 5
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_bc572d2966925a9649b2a9b79adaada49d3df6fd71338e57e85cad1d3233e0ee = $this->env->getExtension("native_profiler");
        $__internal_bc572d2966925a9649b2a9b79adaada49d3df6fd71338e57e85cad1d3233e0ee->enter($__internal_bc572d2966925a9649b2a9b79adaada49d3df6fd71338e57e85cad1d3233e0ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 7
        echo "Hello ";
        echo $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array());
        echo " !

You can reset your password by accessing ";
        // line 9
        echo (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"));
        echo "

Greetings,
the App team
";
        
        $__internal_bc572d2966925a9649b2a9b79adaada49d3df6fd71338e57e85cad1d3233e0ee->leave($__internal_bc572d2966925a9649b2a9b79adaada49d3df6fd71338e57e85cad1d3233e0ee_prof);

    }

    // line 16
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c3ff157fd83fa50e9845fd4743cbb1d122419f68a6ea86d84b16dbcf5841099e = $this->env->getExtension("native_profiler");
        $__internal_c3ff157fd83fa50e9845fd4743cbb1d122419f68a6ea86d84b16dbcf5841099e->enter($__internal_c3ff157fd83fa50e9845fd4743cbb1d122419f68a6ea86d84b16dbcf5841099e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        // line 22
        $this->loadTemplate("emailpassword_resetting.html.twig", ":email:password_resetting.email.twig", 22)->display($context);
        
        $__internal_c3ff157fd83fa50e9845fd4743cbb1d122419f68a6ea86d84b16dbcf5841099e->leave($__internal_c3ff157fd83fa50e9845fd4743cbb1d122419f68a6ea86d84b16dbcf5841099e_prof);

    }

    public function getTemplateName()
    {
        return ":email:password_resetting.email.twig";
    }

    public function getDebugInfo()
    {
        return array (  87 => 22,  81 => 16,  69 => 9,  63 => 7,  57 => 5,  45 => 3,  38 => 16,  35 => 15,  33 => 5,  30 => 4,  28 => 3,  25 => 2,);
    }
}
/* {# app/Resources/views/email/password_resetting.email.twig #}*/
/* */
/* {% block subject %}Resetting your password{% endblock %}*/
/* */
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* Hello {{ user.username }} !*/
/* */
/* You can reset your password by accessing {{ confirmationUrl }}*/
/* */
/* Greetings,*/
/* the App team*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* */
/* {% block body_html %}*/
/* {#*/
/*     You can of course render the html directly here.*/
/*     Including a template as done here allows keeping things DRY by using*/
/*     the template inheritance in it*/
/* #}*/
/* {% include 'email\password_resetting.html.twig' %}*/
/* {% endblock %}*/
