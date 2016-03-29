<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_44983ebba8aca330dcd7cc49d84227e13e16d39848ccbd732aed44c4dcc17c32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c8d422081d5ae4bf1d57e8d515f0ea64beec2ead0d8491d58ff5c4cd25f56dc = $this->env->getExtension("native_profiler");
        $__internal_7c8d422081d5ae4bf1d57e8d515f0ea64beec2ead0d8491d58ff5c4cd25f56dc->enter($__internal_7c8d422081d5ae4bf1d57e8d515f0ea64beec2ead0d8491d58ff5c4cd25f56dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c8d422081d5ae4bf1d57e8d515f0ea64beec2ead0d8491d58ff5c4cd25f56dc->leave($__internal_7c8d422081d5ae4bf1d57e8d515f0ea64beec2ead0d8491d58ff5c4cd25f56dc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1eef921382404cb8e581303d8a28c6103993f50dd9cdbfebf7f2e28d257f424f = $this->env->getExtension("native_profiler");
        $__internal_1eef921382404cb8e581303d8a28c6103993f50dd9cdbfebf7f2e28d257f424f->enter($__internal_1eef921382404cb8e581303d8a28c6103993f50dd9cdbfebf7f2e28d257f424f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_1eef921382404cb8e581303d8a28c6103993f50dd9cdbfebf7f2e28d257f424f->leave($__internal_1eef921382404cb8e581303d8a28c6103993f50dd9cdbfebf7f2e28d257f424f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
