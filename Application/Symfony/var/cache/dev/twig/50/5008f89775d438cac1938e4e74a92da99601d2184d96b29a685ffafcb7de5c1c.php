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
        $__internal_04a29e6b9913c56698ec535107f1dc62a6117f0c87f53d7eb57b8d25d2756f0e = $this->env->getExtension("native_profiler");
        $__internal_04a29e6b9913c56698ec535107f1dc62a6117f0c87f53d7eb57b8d25d2756f0e->enter($__internal_04a29e6b9913c56698ec535107f1dc62a6117f0c87f53d7eb57b8d25d2756f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_04a29e6b9913c56698ec535107f1dc62a6117f0c87f53d7eb57b8d25d2756f0e->leave($__internal_04a29e6b9913c56698ec535107f1dc62a6117f0c87f53d7eb57b8d25d2756f0e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0f7d5631fb343b0c0016bc78a800ead502d7565dafcd2086a4afe6eaea96b880 = $this->env->getExtension("native_profiler");
        $__internal_0f7d5631fb343b0c0016bc78a800ead502d7565dafcd2086a4afe6eaea96b880->enter($__internal_0f7d5631fb343b0c0016bc78a800ead502d7565dafcd2086a4afe6eaea96b880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0f7d5631fb343b0c0016bc78a800ead502d7565dafcd2086a4afe6eaea96b880->leave($__internal_0f7d5631fb343b0c0016bc78a800ead502d7565dafcd2086a4afe6eaea96b880_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3f996f0d5cf306732ef9e3f6dc9a333ff177634371da54f630aab6210d391976 = $this->env->getExtension("native_profiler");
        $__internal_3f996f0d5cf306732ef9e3f6dc9a333ff177634371da54f630aab6210d391976->enter($__internal_3f996f0d5cf306732ef9e3f6dc9a333ff177634371da54f630aab6210d391976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3f996f0d5cf306732ef9e3f6dc9a333ff177634371da54f630aab6210d391976->leave($__internal_3f996f0d5cf306732ef9e3f6dc9a333ff177634371da54f630aab6210d391976_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e38d035608ea6bc5cb65358fc1c7c792dacc6b11c5e497af46551a93abc2ad4c = $this->env->getExtension("native_profiler");
        $__internal_e38d035608ea6bc5cb65358fc1c7c792dacc6b11c5e497af46551a93abc2ad4c->enter($__internal_e38d035608ea6bc5cb65358fc1c7c792dacc6b11c5e497af46551a93abc2ad4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e38d035608ea6bc5cb65358fc1c7c792dacc6b11c5e497af46551a93abc2ad4c->leave($__internal_e38d035608ea6bc5cb65358fc1c7c792dacc6b11c5e497af46551a93abc2ad4c_prof);

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
