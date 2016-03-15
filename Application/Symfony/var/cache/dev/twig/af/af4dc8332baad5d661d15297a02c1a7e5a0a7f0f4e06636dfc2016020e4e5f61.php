<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_4bce4b59c4338b0b45046a3eb40daaec3ac96b6919e385c493dc4be6d6d607e7 extends Twig_Template
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
        $__internal_81f5a22df86b471b1cb61ba039771fb5f1bbd0c70e1df035660ea08285a47400 = $this->env->getExtension("native_profiler");
        $__internal_81f5a22df86b471b1cb61ba039771fb5f1bbd0c70e1df035660ea08285a47400->enter($__internal_81f5a22df86b471b1cb61ba039771fb5f1bbd0c70e1df035660ea08285a47400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_81f5a22df86b471b1cb61ba039771fb5f1bbd0c70e1df035660ea08285a47400->leave($__internal_81f5a22df86b471b1cb61ba039771fb5f1bbd0c70e1df035660ea08285a47400_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
