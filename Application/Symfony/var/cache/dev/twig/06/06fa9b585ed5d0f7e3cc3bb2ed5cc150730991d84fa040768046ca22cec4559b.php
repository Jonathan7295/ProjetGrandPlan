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
        $__internal_5907fcc786b444111007ac43b1b855a55bf6ee0cebb633ebdf32e13e057bdaa0 = $this->env->getExtension("native_profiler");
        $__internal_5907fcc786b444111007ac43b1b855a55bf6ee0cebb633ebdf32e13e057bdaa0->enter($__internal_5907fcc786b444111007ac43b1b855a55bf6ee0cebb633ebdf32e13e057bdaa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_5907fcc786b444111007ac43b1b855a55bf6ee0cebb633ebdf32e13e057bdaa0->leave($__internal_5907fcc786b444111007ac43b1b855a55bf6ee0cebb633ebdf32e13e057bdaa0_prof);

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
