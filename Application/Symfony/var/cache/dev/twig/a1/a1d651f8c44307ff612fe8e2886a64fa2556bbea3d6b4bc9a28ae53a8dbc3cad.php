<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_b77817769aae5ac99233553dedfd067babf5c3999305cbe18e13df049576ceff extends Twig_Template
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
        $__internal_1d9f746a2474aee2bfa9021fd2624969b23dfd5b36ac95043791d9b8feb00ccd = $this->env->getExtension("native_profiler");
        $__internal_1d9f746a2474aee2bfa9021fd2624969b23dfd5b36ac95043791d9b8feb00ccd->enter($__internal_1d9f746a2474aee2bfa9021fd2624969b23dfd5b36ac95043791d9b8feb00ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_1d9f746a2474aee2bfa9021fd2624969b23dfd5b36ac95043791d9b8feb00ccd->leave($__internal_1d9f746a2474aee2bfa9021fd2624969b23dfd5b36ac95043791d9b8feb00ccd_prof);

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
