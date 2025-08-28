import { StarIcon } from "@heroicons/react/16/solid";
import { forwardRef } from "react";

const InputUI = forwardRef(
  (
    {
      label,
      icon,
      error,
      containerClass,
      isRequired,
      showCheckbox,
      checkboxLabel,
      checkboxValue,
      onCheckboxChange,
      onChange,
      ...rest
    },
    ref
  ) => {
    InputUI.displayName = "TextInputBase";
    const isError = error?.message ? true : false;
    return (
      <div className={`flex flex-col w-full ${containerClass}`}>
        {label && (
          <label className="text-xs flex items-center gap-1 text-left text-black/80pl-1">
            {label}
            {isRequired && (
              <StarIcon className="size-2 text-error -translate-y-1" />
            )}
          </label>
        )}

        <input
          {...rest}
          ref={ref}
          onChange={(e) => [
            ref?.onChange && ref.onChange(e),
            onChange && onChange(e),
          ]}
          autoComplete="off"
          className={`h-10 w-full text-sm text-body font-semibold px-3 py-1 border-2 border-extraLightGray
  placeholder:font-medium placeholder:text-darkGray/80 outline-none  rounded-lg z-10
  disabled:bg-extraLightGray/30 disabled:opacity-70 disabled:cursor-not-allowed focus:border-primary/50 ${
    rest.className
  } ${rest.type === "number" ? "hide-number-arrows" : ""}`}
        />

        <span
          className={`${
            isError ? "text-error" : "text-darkGray/80"
          } absolute w-5 right-3 top-1/2 -translate-y-1/2 `}
        >
          {icon}
        </span>
        {isError && (
          <p className="text-xs text-error/90 font-medium pl-1 ">
            {error?.message}
          </p>
        )}
        {showCheckbox && (
          <div className="mt-2 flex items-center">
            <input
              type="checkbox"
              checked={checkboxValue}
              onChange={onCheckboxChange}
              className="mr-2 w-full"
            />
            <label className="text-xs text-darkGray text-wrap">
              {checkboxLabel}
            </label>
          </div>
        )}
      </div>
    );
  }
);

export default InputUI;
