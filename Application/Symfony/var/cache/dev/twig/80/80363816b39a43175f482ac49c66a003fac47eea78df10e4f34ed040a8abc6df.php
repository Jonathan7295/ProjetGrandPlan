<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_bba0786ff7af5c69aba6f908ef08368bb872528c133a9d0d8ec70726fc017a36 extends Twig_Template
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
        $__internal_e6277cb416757ddce3c794cfbc09eb925fb795973a792213019ab737b7eda300 = $this->env->getExtension("native_profiler");
        $__internal_e6277cb416757ddce3c794cfbc09eb925fb795973a792213019ab737b7eda300->enter($__internal_e6277cb416757ddce3c794cfbc09eb925fb795973a792213019ab737b7eda300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e6277cb416757ddce3c794cfbc09eb925fb795973a792213019ab737b7eda300->leave($__internal_e6277cb416757ddce3c794cfbc09eb925fb795973a792213019ab737b7eda300_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d8ddc08c81d6e78cd56dd023467286287a12d7fa59a008b5436870aa21763f76 = $this->env->getExtension("native_profiler");
        $__internal_d8ddc08c81d6e78cd56dd023467286287a12d7fa59a008b5436870aa21763f76->enter($__internal_d8ddc08c81d6e78cd56dd023467286287a12d7fa59a008b5436870aa21763f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_d8ddc08c81d6e78cd56dd023467286287a12d7fa59a008b5436870aa21763f76->leave($__internal_d8ddc08c81d6e78cd56dd023467286287a12d7fa59a008b5436870aa21763f76_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_49803db0991276ffc0597ea931765b5c3d8b6861b8a9671bc166c2c632316952 = $this->env->getExtension("native_profiler");
        $__internal_49803db0991276ffc0597ea931765b5c3d8b6861b8a9671bc166c2c632316952->enter($__internal_49803db0991276ffc0597ea931765b5c3d8b6861b8a9671bc166c2c632316952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_49803db0991276ffc0597ea931765b5c3d8b6861b8a9671bc166c2c632316952->leave($__internal_49803db0991276ffc0597ea931765b5c3d8b6861b8a9671bc166c2c632316952_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b34e4a9c21f6ba093aed4efd8aae0b0d9da62b4c775439222aea64c2f323b34d = $this->env->getExtension("native_profiler");
        $__internal_b34e4a9c21f6ba093aed4efd8aae0b0d9da62b4c775439222aea64c2f323b34d->enter($__internal_b34e4a9c21f6ba093aed4efd8aae0b0d9da62b4c775439222aea64c2f323b34d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b34e4a9c21f6ba093aed4efd8aae0b0d9da62b4c775439222aea64c2f323b34d->leave($__internal_b34e4a9c21f6ba093aed4efd8aae0b0d9da62b4c775439222aea64c2f323b34d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
