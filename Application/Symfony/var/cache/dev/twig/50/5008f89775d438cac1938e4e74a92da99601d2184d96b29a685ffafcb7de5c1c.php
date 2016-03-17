<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_9ce1e206195966a7865eef11465a270fb90298021655f215be3e635a075d52b8 extends Twig_Template
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
        $__internal_4bfdb19f7bb825e6fc87f3851e158c50780f73fbcddb57a8daf8a300f69a1199 = $this->env->getExtension("native_profiler");
        $__internal_4bfdb19f7bb825e6fc87f3851e158c50780f73fbcddb57a8daf8a300f69a1199->enter($__internal_4bfdb19f7bb825e6fc87f3851e158c50780f73fbcddb57a8daf8a300f69a1199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4bfdb19f7bb825e6fc87f3851e158c50780f73fbcddb57a8daf8a300f69a1199->leave($__internal_4bfdb19f7bb825e6fc87f3851e158c50780f73fbcddb57a8daf8a300f69a1199_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_55686f1a170f1e15e7b3a5e7e25c8958ff855ce03dcb89c3abe7dd4f1d4f67a8 = $this->env->getExtension("native_profiler");
        $__internal_55686f1a170f1e15e7b3a5e7e25c8958ff855ce03dcb89c3abe7dd4f1d4f67a8->enter($__internal_55686f1a170f1e15e7b3a5e7e25c8958ff855ce03dcb89c3abe7dd4f1d4f67a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_55686f1a170f1e15e7b3a5e7e25c8958ff855ce03dcb89c3abe7dd4f1d4f67a8->leave($__internal_55686f1a170f1e15e7b3a5e7e25c8958ff855ce03dcb89c3abe7dd4f1d4f67a8_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_5a96d31224ce83fc2dd78872dad4ec03fe3dffab9f43e47748d40a5cf5b04766 = $this->env->getExtension("native_profiler");
        $__internal_5a96d31224ce83fc2dd78872dad4ec03fe3dffab9f43e47748d40a5cf5b04766->enter($__internal_5a96d31224ce83fc2dd78872dad4ec03fe3dffab9f43e47748d40a5cf5b04766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5a96d31224ce83fc2dd78872dad4ec03fe3dffab9f43e47748d40a5cf5b04766->leave($__internal_5a96d31224ce83fc2dd78872dad4ec03fe3dffab9f43e47748d40a5cf5b04766_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_19a53cc7354ae6d422c46e2e425d6de87f6e7cad4dc90673fb794079c568fff9 = $this->env->getExtension("native_profiler");
        $__internal_19a53cc7354ae6d422c46e2e425d6de87f6e7cad4dc90673fb794079c568fff9->enter($__internal_19a53cc7354ae6d422c46e2e425d6de87f6e7cad4dc90673fb794079c568fff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_19a53cc7354ae6d422c46e2e425d6de87f6e7cad4dc90673fb794079c568fff9->leave($__internal_19a53cc7354ae6d422c46e2e425d6de87f6e7cad4dc90673fb794079c568fff9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
