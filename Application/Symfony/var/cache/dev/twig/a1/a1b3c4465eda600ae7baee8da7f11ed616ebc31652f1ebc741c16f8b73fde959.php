<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_d09d672efce147093b5e55909525e1f50b5acffde53f9b9968816efb428caa9c extends Twig_Template
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
        $__internal_a28032f9c2531bd064856d7908c3671ce974f99b10c8483c4c94796f76774a5d = $this->env->getExtension("native_profiler");
        $__internal_a28032f9c2531bd064856d7908c3671ce974f99b10c8483c4c94796f76774a5d->enter($__internal_a28032f9c2531bd064856d7908c3671ce974f99b10c8483c4c94796f76774a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_a28032f9c2531bd064856d7908c3671ce974f99b10c8483c4c94796f76774a5d->leave($__internal_a28032f9c2531bd064856d7908c3671ce974f99b10c8483c4c94796f76774a5d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
