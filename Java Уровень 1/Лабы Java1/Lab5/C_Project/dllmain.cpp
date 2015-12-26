
#include "myjni_Test.h"

JNIEXPORT jdouble JNICALL Java_myjni_Test_add
  (JNIEnv *env, jobject jobj, jdouble a, jdouble b)
  {
  	jclass cl=env->GetObjectClass(jobj);
  	jmethodID id=env->GetMethodID(cl,"someSolt","(II)I");
  	
  	jint n=env->CallIntMethod(jobj,id,7,100);
  	return a+b+n;
  }


