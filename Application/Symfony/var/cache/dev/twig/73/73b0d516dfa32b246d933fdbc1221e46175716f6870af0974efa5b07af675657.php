<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_feba1c8285d2c6d4d249a7199aa023719da1a8c25224c80afffcb6183759cbdf extends Twig_Template
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
        $__internal_21ec408d256f742e4f43c906d43957f86b1c3f52dc8e95e843c03c333cbce296 = $this->env->getExtension("native_profiler");
        $__internal_21ec408d256f742e4f43c906d43957f86b1c3f52dc8e95e843c03c333cbce296->enter($__internal_21ec408d256f742e4f43c906d43957f86b1c3f52dc8e95e843c03c333cbce296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_21ec408d256f742e4f43c906d43957f86b1c3f52dc8e95e843c03c333cbce296->leave($__internal_21ec408d256f742e4f43c906d43957f86b1c3f52dc8e95e843c03c333cbce296_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_54295398ba9b2fdf5e642157f3a23f2c2edb49c75bee3f1aff1c3487d950ac8e = $this->env->getExtension("native_profiler");
        $__internal_54295398ba9b2fdf5e642157f3a23f2c2edb49c75bee3f1aff1c3487d950ac8e->enter($__internal_54295398ba9b2fdf5e642157f3a23f2c2edb49c75bee3f1aff1c3487d950ac8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_54295398ba9b2fdf5e642157f3a23f2c2edb49c75bee3f1aff1c3487d950ac8e->leave($__internal_54295398ba9b2fdf5e642157f3a23f2c2edb49c75bee3f1aff1c3487d950ac8e_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_14f8a4c57ab7a3c1bb36cd0d8382497493b6bf977f4a4dccf4d0e233a4946ac9 = $this->env->getExtension("native_profiler");
        $__internal_14f8a4c57ab7a3c1bb36cd0d8382497493b6bf977f4a4dccf4d0e233a4946ac9->enter($__internal_14f8a4c57ab7a3c1bb36cd0d8382497493b6bf977f4a4dccf4d0e233a4946ac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_14f8a4c57ab7a3c1bb36cd0d8382497493b6bf977f4a4dccf4d0e233a4946ac9->leave($__internal_14f8a4c57ab7a3c1bb36cd0d8382497493b6bf977f4a4dccf4d0e233a4946ac9_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e5b86454626b80e209c1c708ade6f3950e08ae042c6d75b0262b10e95463ee90 = $this->env->getExtension("native_profiler");
        $__internal_e5b86454626b80e209c1c708ade6f3950e08ae042c6d75b0262b10e95463ee90->enter($__internal_e5b86454626b80e209c1c708ade6f3950e08ae042c6d75b0262b10e95463ee90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e5b86454626b80e209c1c708ade6f3950e08ae042c6d75b0262b10e95463ee90->leave($__internal_e5b86454626b80e209c1c708ade6f3950e08ae042c6d75b0262b10e95463ee90_prof);

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
