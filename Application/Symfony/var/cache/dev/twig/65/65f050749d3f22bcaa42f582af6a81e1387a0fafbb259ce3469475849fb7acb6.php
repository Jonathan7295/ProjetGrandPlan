<?php

/* email/password_resetting.email.twig */
class __TwigTemplate_f00f136a1dbec9917c4ad9472e6977e43b5a831873f7a0afe04022b8393b3e75 extends Twig_Template
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
        $__internal_08fbad2e89f867eaec8681009c8652039750e922b8d88536e7707a43f2222de3 = $this->env->getExtension("native_profiler");
        $__internal_08fbad2e89f867eaec8681009c8652039750e922b8d88536e7707a43f2222de3->enter($__internal_08fbad2e89f867eaec8681009c8652039750e922b8d88536e7707a43f2222de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email/password_resetting.email.twig"));

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
        
        $__internal_08fbad2e89f867eaec8681009c8652039750e922b8d88536e7707a43f2222de3->leave($__internal_08fbad2e89f867eaec8681009c8652039750e922b8d88536e7707a43f2222de3_prof);

    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1e6ec5e1742f4fffc3202448c492234717c45171304dc38034c9653693c63b6d = $this->env->getExtension("native_profiler");
        $__internal_1e6ec5e1742f4fffc3202448c492234717c45171304dc38034c9653693c63b6d->enter($__internal_1e6ec5e1742f4fffc3202448c492234717c45171304dc38034c9653693c63b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        echo "Resetting your password";
        
        $__internal_1e6ec5e1742f4fffc3202448c492234717c45171304dc38034c9653693c63b6d->leave($__internal_1e6ec5e1742f4fffc3202448c492234717c45171304dc38034c9653693c63b6d_prof);

    }

    // line 5
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_eec914b25c6bcc64a5b704140bed383cd533850840d7e1158ef36b4bf2f9674c = $this->env->getExtension("native_profiler");
        $__internal_eec914b25c6bcc64a5b704140bed383cd533850840d7e1158ef36b4bf2f9674c->enter($__internal_eec914b25c6bcc64a5b704140bed383cd533850840d7e1158ef36b4bf2f9674c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

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
        
        $__internal_eec914b25c6bcc64a5b704140bed383cd533850840d7e1158ef36b4bf2f9674c->leave($__internal_eec914b25c6bcc64a5b704140bed383cd533850840d7e1158ef36b4bf2f9674c_prof);

    }

    // line 16
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a00c9ac8b06949209821b8631f1f7692254097f5b1036db705c026481745d183 = $this->env->getExtension("native_profiler");
        $__internal_a00c9ac8b06949209821b8631f1f7692254097f5b1036db705c026481745d183->enter($__internal_a00c9ac8b06949209821b8631f1f7692254097f5b1036db705c026481745d183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a00c9ac8b06949209821b8631f1f7692254097f5b1036db705c026481745d183->leave($__internal_a00c9ac8b06949209821b8631f1f7692254097f5b1036db705c026481745d183_prof);

    }

    public function getTemplateName()
    {
        return "email/password_resetting.email.twig";
    }

    public function getDebugInfo()
    {
        return array (  81 => 16,  69 => 9,  63 => 7,  57 => 5,  45 => 3,  38 => 16,  35 => 15,  33 => 5,  30 => 4,  28 => 3,  25 => 2,);
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
/* {% endblock %}*/
