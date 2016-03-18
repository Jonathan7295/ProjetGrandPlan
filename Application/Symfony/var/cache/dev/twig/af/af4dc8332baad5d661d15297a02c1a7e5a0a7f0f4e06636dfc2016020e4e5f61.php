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
        $__internal_21d8cbc0c9138fe23a229273b4a12d369ea7b57c21ca4664d8a4f9eaee20093b = $this->env->getExtension("native_profiler");
        $__internal_21d8cbc0c9138fe23a229273b4a12d369ea7b57c21ca4664d8a4f9eaee20093b->enter($__internal_21d8cbc0c9138fe23a229273b4a12d369ea7b57c21ca4664d8a4f9eaee20093b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_21d8cbc0c9138fe23a229273b4a12d369ea7b57c21ca4664d8a4f9eaee20093b->leave($__internal_21d8cbc0c9138fe23a229273b4a12d369ea7b57c21ca4664d8a4f9eaee20093b_prof);

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
