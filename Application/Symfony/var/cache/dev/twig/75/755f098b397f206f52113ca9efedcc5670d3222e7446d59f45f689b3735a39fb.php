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
        $__internal_4d0608a35d77ead132049ed5d926ca6ef312c067e7e09f45b75ce31eeb099cd2 = $this->env->getExtension("native_profiler");
        $__internal_4d0608a35d77ead132049ed5d926ca6ef312c067e7e09f45b75ce31eeb099cd2->enter($__internal_4d0608a35d77ead132049ed5d926ca6ef312c067e7e09f45b75ce31eeb099cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4d0608a35d77ead132049ed5d926ca6ef312c067e7e09f45b75ce31eeb099cd2->leave($__internal_4d0608a35d77ead132049ed5d926ca6ef312c067e7e09f45b75ce31eeb099cd2_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7e3471fb135f76de1d1fe3e55d7cab6e527738e3aca7f4d198ccddf53a870e75 = $this->env->getExtension("native_profiler");
        $__internal_7e3471fb135f76de1d1fe3e55d7cab6e527738e3aca7f4d198ccddf53a870e75->enter($__internal_7e3471fb135f76de1d1fe3e55d7cab6e527738e3aca7f4d198ccddf53a870e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7e3471fb135f76de1d1fe3e55d7cab6e527738e3aca7f4d198ccddf53a870e75->leave($__internal_7e3471fb135f76de1d1fe3e55d7cab6e527738e3aca7f4d198ccddf53a870e75_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_2d6ef29a306f931e2aca9c35e862dce23d73d90027cf9353a8f5fe281dd65b55 = $this->env->getExtension("native_profiler");
        $__internal_2d6ef29a306f931e2aca9c35e862dce23d73d90027cf9353a8f5fe281dd65b55->enter($__internal_2d6ef29a306f931e2aca9c35e862dce23d73d90027cf9353a8f5fe281dd65b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2d6ef29a306f931e2aca9c35e862dce23d73d90027cf9353a8f5fe281dd65b55->leave($__internal_2d6ef29a306f931e2aca9c35e862dce23d73d90027cf9353a8f5fe281dd65b55_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a1e3d948c53432ff6e2abaa58704772baea1880a957e920f1c9ffeeebb3b0712 = $this->env->getExtension("native_profiler");
        $__internal_a1e3d948c53432ff6e2abaa58704772baea1880a957e920f1c9ffeeebb3b0712->enter($__internal_a1e3d948c53432ff6e2abaa58704772baea1880a957e920f1c9ffeeebb3b0712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a1e3d948c53432ff6e2abaa58704772baea1880a957e920f1c9ffeeebb3b0712->leave($__internal_a1e3d948c53432ff6e2abaa58704772baea1880a957e920f1c9ffeeebb3b0712_prof);

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
