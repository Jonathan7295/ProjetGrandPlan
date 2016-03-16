<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_de6f040ba1c603c9409a64b19266b980fb88ddd239db987f12a29aee6085abdb extends Twig_Template
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
        $__internal_b77d2cbd0834af59906617a5d13ed6c102c764c9a6cfe8ccdce640ff047e01e9 = $this->env->getExtension("native_profiler");
        $__internal_b77d2cbd0834af59906617a5d13ed6c102c764c9a6cfe8ccdce640ff047e01e9->enter($__internal_b77d2cbd0834af59906617a5d13ed6c102c764c9a6cfe8ccdce640ff047e01e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b77d2cbd0834af59906617a5d13ed6c102c764c9a6cfe8ccdce640ff047e01e9->leave($__internal_b77d2cbd0834af59906617a5d13ed6c102c764c9a6cfe8ccdce640ff047e01e9_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f97575f488aa24636cc37d3f83d627708108ba149e2709a7265cebf011362ddc = $this->env->getExtension("native_profiler");
        $__internal_f97575f488aa24636cc37d3f83d627708108ba149e2709a7265cebf011362ddc->enter($__internal_f97575f488aa24636cc37d3f83d627708108ba149e2709a7265cebf011362ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f97575f488aa24636cc37d3f83d627708108ba149e2709a7265cebf011362ddc->leave($__internal_f97575f488aa24636cc37d3f83d627708108ba149e2709a7265cebf011362ddc_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c7bc9cdfcb3d75801554fda53a03a51bff607d68e62c1756d84f7312a97c2a5c = $this->env->getExtension("native_profiler");
        $__internal_c7bc9cdfcb3d75801554fda53a03a51bff607d68e62c1756d84f7312a97c2a5c->enter($__internal_c7bc9cdfcb3d75801554fda53a03a51bff607d68e62c1756d84f7312a97c2a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c7bc9cdfcb3d75801554fda53a03a51bff607d68e62c1756d84f7312a97c2a5c->leave($__internal_c7bc9cdfcb3d75801554fda53a03a51bff607d68e62c1756d84f7312a97c2a5c_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_26bce3c351872393f17ce36f8872e281a33b72474756dc17832fe50c1e6fe6e4 = $this->env->getExtension("native_profiler");
        $__internal_26bce3c351872393f17ce36f8872e281a33b72474756dc17832fe50c1e6fe6e4->enter($__internal_26bce3c351872393f17ce36f8872e281a33b72474756dc17832fe50c1e6fe6e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_26bce3c351872393f17ce36f8872e281a33b72474756dc17832fe50c1e6fe6e4->leave($__internal_26bce3c351872393f17ce36f8872e281a33b72474756dc17832fe50c1e6fe6e4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
