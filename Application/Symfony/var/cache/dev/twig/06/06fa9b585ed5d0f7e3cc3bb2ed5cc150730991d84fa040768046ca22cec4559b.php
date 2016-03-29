<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_4eeae6278b2c4d170a2f39ed1c3f2b5ccb6abea6d95d2acde28cd08b286d9a0a extends Twig_Template
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
        $__internal_83850cf07f517f0271182eb7f67cc9c96b593783d2eef41c79a2cc49d64f402e = $this->env->getExtension("native_profiler");
        $__internal_83850cf07f517f0271182eb7f67cc9c96b593783d2eef41c79a2cc49d64f402e->enter($__internal_83850cf07f517f0271182eb7f67cc9c96b593783d2eef41c79a2cc49d64f402e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_83850cf07f517f0271182eb7f67cc9c96b593783d2eef41c79a2cc49d64f402e->leave($__internal_83850cf07f517f0271182eb7f67cc9c96b593783d2eef41c79a2cc49d64f402e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
