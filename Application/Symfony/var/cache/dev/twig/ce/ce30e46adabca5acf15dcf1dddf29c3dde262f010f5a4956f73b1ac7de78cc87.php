<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_ba8c9431d76795f0308dc121dc9866b9db82423e81b6fae8e626dc343cfad434 extends Twig_Template
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
        $__internal_6ca48f548d361b4c92640ea4731f656947470d82a33b24ac737c10490af1ff2e = $this->env->getExtension("native_profiler");
        $__internal_6ca48f548d361b4c92640ea4731f656947470d82a33b24ac737c10490af1ff2e->enter($__internal_6ca48f548d361b4c92640ea4731f656947470d82a33b24ac737c10490af1ff2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_6ca48f548d361b4c92640ea4731f656947470d82a33b24ac737c10490af1ff2e->leave($__internal_6ca48f548d361b4c92640ea4731f656947470d82a33b24ac737c10490af1ff2e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */