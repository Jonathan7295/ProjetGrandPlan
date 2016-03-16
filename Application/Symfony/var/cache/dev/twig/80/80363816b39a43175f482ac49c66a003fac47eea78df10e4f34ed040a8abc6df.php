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
        $__internal_0d0b9f247c2aca5d418e4ea45c45d7717a998a570d69dfaf87c2f21eafb7c43c = $this->env->getExtension("native_profiler");
        $__internal_0d0b9f247c2aca5d418e4ea45c45d7717a998a570d69dfaf87c2f21eafb7c43c->enter($__internal_0d0b9f247c2aca5d418e4ea45c45d7717a998a570d69dfaf87c2f21eafb7c43c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0d0b9f247c2aca5d418e4ea45c45d7717a998a570d69dfaf87c2f21eafb7c43c->leave($__internal_0d0b9f247c2aca5d418e4ea45c45d7717a998a570d69dfaf87c2f21eafb7c43c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_434cd63448d4052e67539b34dd8d5da58ff4e93ebf7bbf9a6de7fb31824937f3 = $this->env->getExtension("native_profiler");
        $__internal_434cd63448d4052e67539b34dd8d5da58ff4e93ebf7bbf9a6de7fb31824937f3->enter($__internal_434cd63448d4052e67539b34dd8d5da58ff4e93ebf7bbf9a6de7fb31824937f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_434cd63448d4052e67539b34dd8d5da58ff4e93ebf7bbf9a6de7fb31824937f3->leave($__internal_434cd63448d4052e67539b34dd8d5da58ff4e93ebf7bbf9a6de7fb31824937f3_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f38970e459fc814432275c5620dfc53d69c3fe6d3cbdfff6ff3b32728e3869e8 = $this->env->getExtension("native_profiler");
        $__internal_f38970e459fc814432275c5620dfc53d69c3fe6d3cbdfff6ff3b32728e3869e8->enter($__internal_f38970e459fc814432275c5620dfc53d69c3fe6d3cbdfff6ff3b32728e3869e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f38970e459fc814432275c5620dfc53d69c3fe6d3cbdfff6ff3b32728e3869e8->leave($__internal_f38970e459fc814432275c5620dfc53d69c3fe6d3cbdfff6ff3b32728e3869e8_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_086a0653f925d3edbe456f4306878ff402f5aef58a6d008823175629d73f3bf7 = $this->env->getExtension("native_profiler");
        $__internal_086a0653f925d3edbe456f4306878ff402f5aef58a6d008823175629d73f3bf7->enter($__internal_086a0653f925d3edbe456f4306878ff402f5aef58a6d008823175629d73f3bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_086a0653f925d3edbe456f4306878ff402f5aef58a6d008823175629d73f3bf7->leave($__internal_086a0653f925d3edbe456f4306878ff402f5aef58a6d008823175629d73f3bf7_prof);

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
