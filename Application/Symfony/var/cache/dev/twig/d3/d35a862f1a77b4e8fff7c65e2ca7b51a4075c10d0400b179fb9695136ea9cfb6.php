<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_3a6defa6add46faa8c617b9e892f20f62b760c5bb12c7e03c703734945b4aa50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7bb459f7b5d72d2e1b9d6bb05e0e721499fb495f2f2c14c88858591e196d35f = $this->env->getExtension("native_profiler");
        $__internal_d7bb459f7b5d72d2e1b9d6bb05e0e721499fb495f2f2c14c88858591e196d35f->enter($__internal_d7bb459f7b5d72d2e1b9d6bb05e0e721499fb495f2f2c14c88858591e196d35f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_d7bb459f7b5d72d2e1b9d6bb05e0e721499fb495f2f2c14c88858591e196d35f->leave($__internal_d7bb459f7b5d72d2e1b9d6bb05e0e721499fb495f2f2c14c88858591e196d35f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */