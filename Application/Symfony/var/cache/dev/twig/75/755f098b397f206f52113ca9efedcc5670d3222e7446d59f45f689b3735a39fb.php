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
        $__internal_ff586713d6bbab79fe682d7a6d7b913e33b9590a26273d121c191c0ea17fd110 = $this->env->getExtension("native_profiler");
        $__internal_ff586713d6bbab79fe682d7a6d7b913e33b9590a26273d121c191c0ea17fd110->enter($__internal_ff586713d6bbab79fe682d7a6d7b913e33b9590a26273d121c191c0ea17fd110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ff586713d6bbab79fe682d7a6d7b913e33b9590a26273d121c191c0ea17fd110->leave($__internal_ff586713d6bbab79fe682d7a6d7b913e33b9590a26273d121c191c0ea17fd110_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_bd49bcb2c31e0473c2602db394702fffd0f03137967bcc8b3e70e2983ebda39c = $this->env->getExtension("native_profiler");
        $__internal_bd49bcb2c31e0473c2602db394702fffd0f03137967bcc8b3e70e2983ebda39c->enter($__internal_bd49bcb2c31e0473c2602db394702fffd0f03137967bcc8b3e70e2983ebda39c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_bd49bcb2c31e0473c2602db394702fffd0f03137967bcc8b3e70e2983ebda39c->leave($__internal_bd49bcb2c31e0473c2602db394702fffd0f03137967bcc8b3e70e2983ebda39c_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_1548e3563f56311c15861fc687562b5ab1d22bb6fedc8e8960ca43110d15d698 = $this->env->getExtension("native_profiler");
        $__internal_1548e3563f56311c15861fc687562b5ab1d22bb6fedc8e8960ca43110d15d698->enter($__internal_1548e3563f56311c15861fc687562b5ab1d22bb6fedc8e8960ca43110d15d698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1548e3563f56311c15861fc687562b5ab1d22bb6fedc8e8960ca43110d15d698->leave($__internal_1548e3563f56311c15861fc687562b5ab1d22bb6fedc8e8960ca43110d15d698_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_42623a34b56df32d748e219880a529dd304daf1d42b12b66f75600d39330830e = $this->env->getExtension("native_profiler");
        $__internal_42623a34b56df32d748e219880a529dd304daf1d42b12b66f75600d39330830e->enter($__internal_42623a34b56df32d748e219880a529dd304daf1d42b12b66f75600d39330830e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_42623a34b56df32d748e219880a529dd304daf1d42b12b66f75600d39330830e->leave($__internal_42623a34b56df32d748e219880a529dd304daf1d42b12b66f75600d39330830e_prof);

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
