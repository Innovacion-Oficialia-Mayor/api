<?php

namespace Database\Seeders\Clima;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Clima\Question;

class QuestionSeeder extends Seeder {
  /**
   * Ejecuta el seeder de la tabla questions
   * de la base de datos de Clima Laboral.
   *
   * @return void
   */
  public function run() {
    Question::insert([
      ['id' =>   1, 'factor_id' =>  1, 'body' => 'En tu área se reconoce el logro de resultados.'],
      ['id' =>   2, 'factor_id' =>  1, 'body' => 'En tu área operan mecanismos de reconocimiento al personal.'],
      ['id' =>   3, 'factor_id' =>  1, 'body' => 'Tu Jefe(a) te reconoce cuando logras los objetivos esperados.'],
      ['id' =>   4, 'factor_id' =>  1, 'body' => 'Dentro de tu área se reconoce la trayectoria del personal del departamento, para ser promovido.'],
      ['id' =>   5, 'factor_id' =>  1, 'body' => 'Tu Jefe(a) te hace saber que valora tus esfuerzos y aportaciones en tu trabajo, aun cuando por causas ajenas no se alcance el objetivo deseado.'],
      ['id' =>   6, 'factor_id' =>  2, 'body' => 'En tu área de trabajo, el programa de capacitación está alineado a tus funciones.'],
      ['id' =>   7, 'factor_id' =>  2, 'body' => 'Aplicas la capacitación que recibiste para mejorar tu desempeño en el trabajo.'],
      ['id' =>   8, 'factor_id' =>  2, 'body' => 'Tu Jefe(a) te permite cumplir con la capacitación programada.'],
      ['id' =>   9, 'factor_id' =>  2, 'body' => 'Cuando ingresaste como Servidor Público, recibiste capacitación.'],
      ['id' =>  10, 'factor_id' =>  2, 'body' => 'Conoces las políticas de la dependencia.'],
      ['id' =>  11, 'factor_id' =>  3, 'body' => 'En tu área se buscan nuevas formas de brindar los servicios eficazmente.'],
      ['id' =>  12, 'factor_id' =>  3, 'body' => 'En tu área existen mecanismos que captan sus sugerencias para mejorar.'],
      ['id' =>  13, 'factor_id' =>  3, 'body' => 'Participas en los cambios innovadores de tu área para mejorar la forma de trabajar.'],
      ['id' =>  14, 'factor_id' =>  3, 'body' => 'Se te exhorta a encontrar nuevas y mejores maneras de hacer tu trabajo.'],
      ['id' =>  15, 'factor_id' =>  3, 'body' => 'Tus superiores reaccionan de manera positiva ante nuevas ideas.'],
      ['id' =>  16, 'factor_id' =>  4, 'body' => 'Tu Jefe(a) es congruente en lo que dice y lo que hace.'],
      ['id' =>  17, 'factor_id' =>  4, 'body' => 'Tu Jefe(a) te proporciona la información necesaria para tomar decisiones en el desempeño en tu trabajo y cumplimiento de tus metas.'],
      ['id' =>  18, 'factor_id' =>  4, 'body' => 'Tu Jefe(a) fomenta relación positiva.'],
      ['id' =>  19, 'factor_id' =>  4, 'body' => 'Tu Jefe(a) estimula tus capacidades.'],
      ['id' =>  20, 'factor_id' =>  4, 'body' => 'Tu Jefe(a) acepta opiniones.'],
      ['id' =>  21, 'factor_id' =>  5, 'body' => 'Los objetivos que fija tu Jefe(a) para su trabajo son razonables.'],
      ['id' =>  22, 'factor_id' =>  5, 'body' => 'En tu área existen instalaciones accesibles para personas con alguna discapacidad.'],
      ['id' =>  23, 'factor_id' =>  5, 'body' => 'En tu área el hostigamiento es inaceptable.'],
      ['id' =>  24, 'factor_id' =>  5, 'body' => 'En tu área se dan las oportunidades de ascenso y promoción de acuerdo a los principios de igualdad y no discriminación.'],
      ['id' =>  25, 'factor_id' =>  5, 'body' => 'Tu jefe(a) no tiene favoritos.'],
      ['id' =>  26, 'factor_id' =>  6, 'body' => 'En tu área de trabajo se comunican de forma efectiva entre las diferentes áreas.'],
      ['id' =>  27, 'factor_id' =>  6, 'body' => 'En tu área utilizan de forma eficiente los medios de comunicación interna.'],
      ['id' =>  28, 'factor_id' =>  6, 'body' => 'Tu Jefe comunica la visión, la misión y los valores de la Administración Municipal de Celaya.'],
      ['id' =>  29, 'factor_id' =>  6, 'body' => 'Tus superiores son capaces de lograr una comunicación asertiva.'],
      ['id' =>  30, 'factor_id' =>  6, 'body' => 'En tu área de trabajo concilian con respeto las diferencias que se presentan con compañeros (as) de trabajo.'],
      ['id' =>  31, 'factor_id' =>  7, 'body' => 'Solicitas de manera racional y oportuna el material para desempeñar tus funciones, de acuerdo a las medidas de austeridad establecidas.'],
      ['id' =>  32, 'factor_id' =>  7, 'body' => 'Las herramientas de trabajo con las que cuentas son eficientes para el desarrollo de tu trabajo.'],
      ['id' =>  33, 'factor_id' =>  7, 'body' => 'Tienes a tiempo el material que requieres para hacer tu trabajo.'],
      ['id' =>  34, 'factor_id' =>  7, 'body' => 'En tu área existen condiciones de seguridad e higiene para realizar tu trabajo.'],
      ['id' =>  35, 'factor_id' =>  7, 'body' => 'Tu área de trabajo cuenta con el espacio, iluminación y ventilación adecuada para poder realizar tus actividades.'],
      ['id' =>  36, 'factor_id' =>  8, 'body' => 'Te sientes satisfecho con tu ambiente de trabajo.'],
      ['id' =>  37, 'factor_id' =>  8, 'body' => 'Tu trabajo te permite dedicar tiempo a tu familia.'],
      ['id' =>  38, 'factor_id' =>  8, 'body' => 'En tu área de trabajo te apoyan cuando tienes una urgencia familiar.'],
      ['id' =>  39, 'factor_id' =>  8, 'body' => 'En tu área de trabajo respetan el horario de trabajo.'],
      ['id' =>  40, 'factor_id' =>  8, 'body' => 'Sales del trabajo sintiéndote satisfecho de lo que hiciste.'],
      ['id' =>  41, 'factor_id' =>  9, 'body' => 'En tu área de trabajo se fomenta el trabajo en equipo.'],
      ['id' =>  42, 'factor_id' =>  9, 'body' => 'Son colaboradores tus compañeros de trabajo.'],
      ['id' =>  43, 'factor_id' =>  9, 'body' => 'En tu área comparten sus recursos para fomentar el trabajo en equipo.'],
      ['id' =>  44, 'factor_id' =>  9, 'body' => 'Existe un trato respetuoso con tus compañeros de trabajo.'],
      ['id' =>  45, 'factor_id' =>  9, 'body' => 'Son confiables tus compañeros de trabajo.'],
      ['id' =>  46, 'factor_id' => 10, 'body' => 'Te interesas por conocer las necesidades de los usuarios (as) de tu trabajo.'],
      ['id' =>  47, 'factor_id' => 10, 'body' => 'En tu área, promueven captar las sugerencias de sus usuarios (as).'],
      ['id' =>  48, 'factor_id' => 10, 'body' => 'En tu área se proporciona el servicio requerido de manera cordial, respetuosa y con los principios de igualdad y no discriminación.'],
      ['id' =>  49, 'factor_id' => 10, 'body' => 'En tu área se aprovechan las sugerencias para mejorar la calidad de los servicios.'],
      ['id' =>  50, 'factor_id' => 10, 'body' => 'En tu área se cuenta con un sistema de calidad que ayude a mejorar el servicio que se brindan.'],
      ['id' =>  51, 'factor_id' => 11, 'body' => 'Te sientes identificado(a) con la filosofía organizacional de la dependencia.'],
      ['id' =>  52, 'factor_id' => 11, 'body' => 'La dependencia cuenta con código de ética y conducta que incorpora explícitamente los principios de derechos humanos, igualdad y no discriminación.'],
      ['id' =>  53, 'factor_id' => 11, 'body' => 'Trabajar en la administración pública te permite contribuir al bienestar de la sociedad.'],
      ['id' =>  54, 'factor_id' => 11, 'body' => 'En tu área se actúa conforme a los valores que fomenta la dependencia.'],
      ['id' =>  55, 'factor_id' => 11, 'body' => 'Te sientes orgulloso(a) de ser parte de la dependencia.'],
      ['id' =>  56, 'factor_id' => 12, 'body' => 'En tu área actúan con transparencia y legalidad.'],
      ['id' =>  57, 'factor_id' => 12, 'body' => 'Tus superiores manejan los recursos del área de manera responsable y austera.'],
      ['id' =>  58, 'factor_id' => 12, 'body' => 'En tu área, si ves corrupción la denuncias.'],
      ['id' =>  59, 'factor_id' => 12, 'body' => 'En tu área se sancionan los actos de corrupción de acuerdo a la normatividad.'],
      ['id' =>  60, 'factor_id' => 12, 'body' => 'En tu área existe un protocolo que ayude a detectar actos de corrupción.'],
      ['id' =>  61, 'factor_id' => 13, 'body' => 'Conoces el impacto que el trabajo de tu área tiene en la Administración Pública.'],
      ['id' =>  62, 'factor_id' => 13, 'body' => 'La estructura de la dependencia está alineada para el cumplimiento de sus objetivos.'],
      ['id' =>  63, 'factor_id' => 13, 'body' => 'Te comprometes a lograr cada vez mejores resultados en tu área.'],
      ['id' =>  64, 'factor_id' => 13, 'body' => 'En tu área logran los objetivos institucionales sin incrementar el gasto.'],
      ['id' =>  65, 'factor_id' => 13, 'body' => 'En tu dependencia, se realizan acciones que logren aumentar la productividad de tus compañeros logrando mejores resultados.'],
      ['id' =>  66, 'factor_id' => 14, 'body' => 'La normatividad de la dependencia responde a las necesidades actuales del usuario.'],
      ['id' =>  67, 'factor_id' => 14, 'body' => 'Los procedimientos de tu área están actualizados.'],
      ['id' =>  68, 'factor_id' => 14, 'body' => 'Conoces la normatividad aplicable a tu trabajo.'],
      ['id' =>  69, 'factor_id' => 14, 'body' => 'En tu área implementan propuestas de solución para simplificar los procesos de trabajo.'],
      ['id' =>  70, 'factor_id' => 14, 'body' => 'Se dan a conocer los procesos del área con los compañeros.'],
      ['id' =>  71, 'factor_id' => 15, 'body' => 'En tu área se difunden los resultados de la encuesta de clima laboral.'],
      ['id' =>  72, 'factor_id' => 15, 'body' => 'Participas en la mejora del clima laboral de tu área.'],
      ['id' =>  73, 'factor_id' => 15, 'body' => 'En tu área realizan acciones para mejorar el clima laboral.'],
      ['id' =>  74, 'factor_id' => 15, 'body' => 'Se realizan reuniones para dar a conocer los avances de acciones de mejora.'],
      ['id' =>  75, 'factor_id' => 15, 'body' => 'Al momento de aplicar las acciones de mejora se perciben los cambios en el clima laboral.'],
      ['id' =>  76, 'factor_id' => 16, 'body' => 'Para el desempeño de tus funciones es indispensable usar las tecnologías de información y comunicación.'],
      ['id' =>  77, 'factor_id' => 16, 'body' => 'En tu área se ha proporcionado en los últimos 12 meses al menos un curso relacionado con las tecnologías de información y comunicación.'],
      ['id' =>  78, 'factor_id' => 16, 'body' => 'En tu área utilizan eficientemente las tecnologías de la información y comunicación para agilizar el tiempo de espera de los usuarios.'],
      ['id' =>  79, 'factor_id' => 16, 'body' => 'En tu área tienen la habilidad para utilizar las tecnologías de la información y comunicación en el desempeño de sus funciones.'],
      ['id' =>  80, 'factor_id' => 16, 'body' => 'En tu área se implementan las herramientas tecnológicas para reducir el tiempo de actividades de los procesos.'],
      ['id' =>  81, 'factor_id' => 17, 'body' => 'Te sientes emocionalmente agotado por tu trabajo.'],
      ['id' =>  82, 'factor_id' => 17, 'body' => 'Te sientes cansado al final de la jornada de trabajo.'],
      ['id' =>  83, 'factor_id' => 17, 'body' => 'Te sientes fatigado cuando te levantas por la mañana y tienes que ir a trabajar.'],
      ['id' =>  84, 'factor_id' => 17, 'body' => 'Comprendes fácilmente como se sienten los demás.'],
      ['id' =>  85, 'factor_id' => 17, 'body' => 'Tratas a las demás personas como si fueran objetos impersonales.'],
      ['id' =>  86, 'factor_id' => 17, 'body' => 'Trabajar todo el día con mucha gente es un esfuerzo.'],
      ['id' =>  87, 'factor_id' => 17, 'body' => 'Te sientes frustrado en tu trabajo.'],
      ['id' =>  88, 'factor_id' => 17, 'body' => 'Te has vuelto más insensible con la gente desde que ejerces este trabajo.'],
      ['id' =>  89, 'factor_id' => 17, 'body' => 'Puedes crear fácilmente un ambiente relajado con tus compañeros.'],
      ['id' =>  90, 'factor_id' => 17, 'body' => 'Crees que estás trabajando demasiado.'],
      ['id' =>  91, 'factor_id' => 17, 'body' => 'En tu trabajo tratas los problemas emocionales con mucha calma.'],
      ['id' =>  92, 'factor_id' => 17, 'body' => 'Has conseguido muchas cosas útiles en tu trabajo.'],
      ['id' =>  93, 'factor_id' => 17, 'body' => 'Te sientes muy activo.'],
      ['id' =>  94, 'factor_id' => 17, 'body' => 'Has experimentado sentimientos de depresión o tristeza.'],
      ['id' =>  95, 'factor_id' => 17, 'body' => 'Ha aumentado tu necesidad de comer.'],
      ['id' =>  96, 'factor_id' => 17, 'body' => 'Has presentado temblores, tic o calambres musculares.'],
      ['id' =>  97, 'factor_id' => 17, 'body' => 'Has presentado dolores de cabeza ocasionados por la actividad laboral.'],
      ['id' =>  98, 'factor_id' => 17, 'body' => 'Te sientes presionado por tu trabajo.'],
      ['id' =>  99, 'factor_id' => 17, 'body' => 'Has presentado disminución en tu actividad laboral.'],
      ['id' => 100, 'factor_id' => 17, 'body' => 'Tienes agotamiento o excesiva fatiga.'],
      ['id' => 101, 'factor_id' => 17, 'body' => 'Tiendes a rascarte o morderte las uñas frecuentemente.'],
      ['id' => 102, 'factor_id' => 17, 'body' => 'Presentas sentimientos de agresividad o irritabilidad.'],
    ]);
  }
}
