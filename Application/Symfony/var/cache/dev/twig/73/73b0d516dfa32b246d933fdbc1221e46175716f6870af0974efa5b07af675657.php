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
        $__internal_6d0999f1ac3bd87cf37ba9ed1110530348fffb49265f70929dc7305ae7f61cd8 = $this->env->getExtension("native_profiler");
        $__internal_6d0999f1ac3bd87cf37ba9ed1110530348fffb49265f70929dc7305ae7f61cd8->enter($__internal_6d0999f1ac3bd87cf37ba9ed1110530348fffb49265f70929dc7305ae7f61cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6d0999f1ac3bd87cf37ba9ed1110530348fffb49265f70929dc7305ae7f61cd8->leave($__internal_6d0999f1ac3bd87cf37ba9ed1110530348fffb49265f70929dc7305ae7f61cd8_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_cc86dd5943ca247df2ca2e558221db0391f9b2305f72f7040570940e17718d1c = $this->env->getExtension("native_profiler");
        $__internal_cc86dd5943ca247df2ca2e558221db0391f9b2305f72f7040570940e17718d1c->enter($__internal_cc86dd5943ca247df2ca2e558221db0391f9b2305f72f7040570940e17718d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_cc86dd5943ca247df2ca2e558221db0391f9b2305f72f7040570940e17718d1c->leave($__internal_cc86dd5943ca247df2ca2e558221db0391f9b2305f72f7040570940e17718d1c_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f9388109b4307d96ef52c5629589de61d048dab3ded768b580803aae0ae8cca6 = $this->env->getExtension("native_profiler");
        $__internal_f9388109b4307d96ef52c5629589de61d048dab3ded768b580803aae0ae8cca6->enter($__internal_f9388109b4307d96ef52c5629589de61d048dab3ded768b580803aae0ae8cca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f9388109b4307d96ef52c5629589de61d048dab3ded768b580803aae0ae8cca6->leave($__internal_f9388109b4307d96ef52c5629589de61d048dab3ded768b580803aae0ae8cca6_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f67d4348a714119c3873159be481baf841187aa23937f659568e4f71d5cb916b = $this->env->getExtension("native_profiler");
        $__internal_f67d4348a714119c3873159be481baf841187aa23937f659568e4f71d5cb916b->enter($__internal_f67d4348a714119c3873159be481baf841187aa23937f659568e4f71d5cb916b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f67d4348a714119c3873159be481baf841187aa23937f659568e4f71d5cb916b->leave($__internal_f67d4348a714119c3873159be481baf841187aa23937f659568e4f71d5cb916b_prof);

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
