<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_0b6ac8234c201b352eca54490845e433d082f3dce35e422b992e75d8be32c3c8 extends Twig_Template
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
        $__internal_192e8f589f7caa0ec781be66255fe5291bc353e2a87ece2055a173922f9ffc7d = $this->env->getExtension("native_profiler");
        $__internal_192e8f589f7caa0ec781be66255fe5291bc353e2a87ece2055a173922f9ffc7d->enter($__internal_192e8f589f7caa0ec781be66255fe5291bc353e2a87ece2055a173922f9ffc7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_192e8f589f7caa0ec781be66255fe5291bc353e2a87ece2055a173922f9ffc7d->leave($__internal_192e8f589f7caa0ec781be66255fe5291bc353e2a87ece2055a173922f9ffc7d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_41da2fde1fe75f1b2980a4f3a3d5bd720ae738263383f968cdb0e378981b9eaa = $this->env->getExtension("native_profiler");
        $__internal_41da2fde1fe75f1b2980a4f3a3d5bd720ae738263383f968cdb0e378981b9eaa->enter($__internal_41da2fde1fe75f1b2980a4f3a3d5bd720ae738263383f968cdb0e378981b9eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_41da2fde1fe75f1b2980a4f3a3d5bd720ae738263383f968cdb0e378981b9eaa->leave($__internal_41da2fde1fe75f1b2980a4f3a3d5bd720ae738263383f968cdb0e378981b9eaa_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ae0ff8b7c918c722e11765ee3132a90a378d18f05d41ace2a184b22dbac9334e = $this->env->getExtension("native_profiler");
        $__internal_ae0ff8b7c918c722e11765ee3132a90a378d18f05d41ace2a184b22dbac9334e->enter($__internal_ae0ff8b7c918c722e11765ee3132a90a378d18f05d41ace2a184b22dbac9334e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ae0ff8b7c918c722e11765ee3132a90a378d18f05d41ace2a184b22dbac9334e->leave($__internal_ae0ff8b7c918c722e11765ee3132a90a378d18f05d41ace2a184b22dbac9334e_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_dde0f72aabb6d518c9d23511d34831aa5d45ced02a4e60cf720e46c6d96d4690 = $this->env->getExtension("native_profiler");
        $__internal_dde0f72aabb6d518c9d23511d34831aa5d45ced02a4e60cf720e46c6d96d4690->enter($__internal_dde0f72aabb6d518c9d23511d34831aa5d45ced02a4e60cf720e46c6d96d4690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_dde0f72aabb6d518c9d23511d34831aa5d45ced02a4e60cf720e46c6d96d4690->leave($__internal_dde0f72aabb6d518c9d23511d34831aa5d45ced02a4e60cf720e46c6d96d4690_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
